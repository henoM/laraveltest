<?php

namespace App\Http\Controllers\Admin;


use App\Contracts\IUserService;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminController extends Controller
{
    protected $userRepo;

    public function __construct(IUserService $userRepo)
    {
        $this->userRepo = $userRepo;
    }


    public function index()
    {
        return view('admin.admin');
    }
    public function adminLogin(Request $request)
    {
        dd($request->all());
    }

    public function dashboard()
    {
            return view('admin.dashboard');
    }

    public function datatable()
    {
        return view('admin.datatabel');
    }

    public function users(){
        return $users = $this->userRepo->getData();
    }

    public function edit(UserRequest $request,$id){
        $this->userRepo->update($request,$id);
        return redirect()->back();
    }
    public function updateShow($id){
        $user = $this->userRepo->showUpdate($id);
        return view('admin.partials._update',['user'=>$user]);
    }

    public function delete($id){
        $this->userRepo->delete($id);
        return    redirect()->back();
    }


}