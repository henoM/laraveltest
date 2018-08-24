<?php
/**
 *
 */

namespace App\Repositories;


use App\Contracts\IUserService;
use App\User;
use Yajra\Datatables\Datatables;

class UserRepository implements IUserService
{
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * Store User
     * @param $data
     * @return mixed|void
     */
    public function store($data)
    {

        $data['is_active'] = 0;
        $data['token'] = 'token';
        return $this->model->create($data);
    }

    public function getData()
    {
//      return $this->model->All();

        $users = $this->model->all();

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return view('admin.partials._actions',['user' => $user])
                    ->render();
            })
//            ->editColumn('is_active', function ($user) {
//                return view('admin.users.partials._status', ['user' => $user])
//                    ->render();
//            })
            ->rawColumns(['action'])
            ->make(true);
    }

//
    public function showUpdate($id)
    {
        return $this->model->where('id', $id)->first();
    }
    public function delete($id)
    {
        return $this->model->where('id', $id)->delete();
    }

    public function update($data,$id)
    {
        return $this->model->where('id', $id)->update(['name'=>$data->name]);
    }
}