<?php

namespace App\Http\Controllers\Admin\User;

use App\Contracts\Admin\User\UserInterface;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Controllers\Controller;
use Auth;

class UserController extends Controller
{


    /**
     * Object of class IUserService
     * @var interger $userRepo
     * */
    protected $userRepo;




    public function __construct(UserInterface $userRepo)
    {
        $this->userRepo = $userRepo;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = $this->userRepo->getData();
        return view('admin.users.users', ['users' => $users]);

    }

    /**
     * @param UserUpdateRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit(UserUpdateRequest $request, $id)
    {
        $this->userRepo->update($request,$id);
        return redirect()->back();
    }


    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUser($id)
    {
        $user = $this->userRepo->getById($id);
        return view('admin.partials._update',['user'=>$user]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        $this->userRepo->delete($id);
        return    redirect()->back();
    }
}
