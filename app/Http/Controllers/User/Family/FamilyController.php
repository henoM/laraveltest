<?php

namespace App\Http\Controllers\User\Family;


use App\Contracts\User\Family\PeopleInterface;
use App\Contracts\User\Home\HomeInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Family\FamilyAddRequest;
use App\Http\Requests\User\Family\FamilyUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FamilyController extends Controller
{

    protected $peopleRepo;
    protected $homeRepo;

    public function __construct(PeopleInterface $peopleRepo, HomeInterface  $homeRepo)
    {
        $this->peopleRepo  = $peopleRepo;
        $this->homeRepo  = $homeRepo;
    }
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        $peoples = Auth::user()->peoples;

        return view('user.family.family',['peoples' => $peoples]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $select = $peoples = Auth::user()->peoples->pluck('first_name', 'id');

        return view('user.family.create',compact('select'));
    }

    /**
     * @param FamilyAddRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(FamilyAddRequest $request)
    {
        $home = $request->home;

        $request = $request->inputs();

        $people =  $this->peopleRepo->store($request);

        $people->homes()->sync($home);

        return redirect()->to('user/family')->with('create', 'New People created');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function people($id)
    {

        $people  = $this->peopleRepo->people($id);

        $homes = $people->Homes;

        return view('user.family.people', compact('people','homes'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function update($id)
    {

        $select = $peoples = Auth::user()->peoples->pluck('first_name', 'id');

        $people = $this->peopleRepo->getById($id);

        return view('user.family.update',compact('select','people'));

    }
    public function edit($id,FamilyUpdateRequest $request)
    {
        dd($request);
        $this->peopleRepo->edit($id,$request);
        return  redirect()->to('user/family')->with('update', 'People update');

    }
    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delete($id)
    {
       $this->peopleRepo->delete($id);
       return redirect()->to('user/family')->with('delete', 'People deleted');
    }
}
