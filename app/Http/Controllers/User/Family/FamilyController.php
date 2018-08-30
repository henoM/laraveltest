<?php

namespace App\Http\Controllers\User\Family;


use App\Contracts\User\Family\PeopleInterface;
use App\Contracts\User\Home\HomeInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Family\FamilyAddRequest;
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
        $userId = Auth::user()->id;
        $peoples = $this->peopleRepo->getPeoples($userId);
        return view('user.family.family',['peoples' => $peoples]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $userId = Auth::user()->id;
        $homes = $this->homeRepo->gethomes($userId);
        $select = [];
        foreach($homes as $home){
            $select[$home->id] = $home->name;
        }
        return view('user.family.create',compact('select'));
    }

    /**
     * @param FamilyAddRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(FamilyAddRequest $request)
    {
        $userId =Auth::user()->id;
        $home = $request->home;
        $people =  $this->peopleRepo->store($request->all(),$userId);
        $people->homes()->sync($home);;
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
        return view('user.family.people',compact('people','homes'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public function update($id)
    {
        $userId = Auth::user()->id;
        $homes = $this->homeRepo->getHomes($userId);
        foreach($homes as $home){

            $select[$home->id] = $home->name;
        }
        $people = $this->peopleRepo->getById($id);
        return view('user.family.update',compact('select','people'));
    }
    public function edit($id,FamilyAddRequest $request)
    {
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
