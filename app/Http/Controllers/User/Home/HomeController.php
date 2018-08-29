<?php

namespace App\Http\Controllers\User\Home;

use App\Contracts\User\Home\FileInterface;
use App\Contracts\User\Home\HomeInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\User\Home\HomeAddRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{

    protected $homeRepo;
    protected $fileRepo;
    /**
     * HomeController constructor.
     * @param HomeInterface $homeRepo
     */

    public function __construct(HomeInterface $homeRepo,FileInterface $fileRepo){
        $this->homeRepo = $homeRepo;
        $this->fileRepo = $fileRepo;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $homes = $this->homeRepo->getHomes();
        return view('user.homes.homes',['homes' => $homes]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {

        $homes = $this->homeRepo->create();
        $select = [];
        foreach($homes as $home){
            $select[$home->id] = $home->first_name.' '.$home->last_name;
        }

        return view('user.homes.create',compact('select'));
    }

    /**
     * @param HomeAddRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function store(HomeAddRequest $request)
    {

        $people = $request->people;
        $data =$request->except('file');
        $path = $this->fileRepo->upload($request->file);
        $data['path'] = $path;
        $data['user_id'] = Auth::user()->id;
        $home = $this->homeRepo->store($data);
        $home->Peoples()->sync([$people]);
        return redirect()->back();
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home($id)
    {
//        dd($id);
        return view('user.homes.home');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update($id)
    {
//        dd($id);
        return view('user.homes.update');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delete($id)
    {
        $this->homeRepo->delete($id);
        return redirect()->back();
    }
}
