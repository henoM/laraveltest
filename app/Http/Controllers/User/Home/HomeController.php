<?php

namespace App\Http\Controllers\User\Home;

use App\Contracts\User\Family\PeopleInterface;
use App\Contracts\User\Home\FileInterface;
use App\Contracts\User\Home\HomeInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Home\HomeAddRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    protected $homeRepo;
    protected $fileRepo;
    protected $peopleRepo;
    /**
     * HomeController constructor.
     * @param HomeInterface $homeRepo
     */

    public function __construct(HomeInterface $homeRepo, FileInterface $fileRepo, PeopleInterface $peopleRepo){

        $this->homeRepo = $homeRepo;
        $this->fileRepo = $fileRepo;
        $this->peopleRepo = $peopleRepo;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){

        $homes = Auth::user()->homes;
        return view('user.homes.homes',['homes' => $homes]);

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $select = Auth::user()->peoples->pluck('first_name', 'id');
        return view('user.homes.create',compact('select'));
    }

    /**
     * @param HomeAddRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(HomeAddRequest $request)
    {



        $id = Auth::user()->id;
        $path = $this->fileRepo->upload($request->file,$id);

        $data = $request->except('file');

        $data['path'] = $path;

        $data['user_id'] = Auth::user()->id;

        $home = $this->homeRepo->store($data);

        $people = $request->people;

        $home->Peoples()->sync($people);

        return redirect()->to('user/homes')->with('create', 'New home created');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home($id)
    {
       $home  = $this->homeRepo->home($id);

       $peoples = $home->Peoples;

        return view('user.homes.home', compact('home','peoples'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update($id)
    {
        $select = Auth::user()->peoples->pluck('first_name', 'id');

        $home = $this->homeRepo->getById($id);

        return view('user.homes.update',compact('select','home'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit($id, HomeAddRequest $request)
    {
        $people = $request->people;
        $this->homeRepo->update($id,$request);
        $home = $this->homeRepo->home($id);
        $home->Peoples()->sync($people);
        return redirect()->to('user/homes')->with('update', 'Homes updateed');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delete($id)
    {
        $this->homeRepo->delete($id);
        return redirect()->to('user/homes')->with('delete', 'Homes deleted');
    }
}
