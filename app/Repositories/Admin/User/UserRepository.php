<?php
/**
 *
 */

namespace App\Repositories\Admin\User;


use App\Contracts\Admin\User\UserInterface;
use App\Models\User\User;

class UserRepository implements UserInterface
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
        return $this->model->create($data);
    }

    public function getData()
    {
        return $this->model->paginate(2);
    }


    public function getById($id)
    {
        return $this->model->where('id', $id)->first();
    }
    public function delete($id)
    {
        return $this->model->where('id', $id)->delete();
    }

    public function update($request,$id)
    {

        $data = [
            'name'=>$request->name
        ];
        return $this->model->where('id', $id)->update($data);
    }
    public function activate($token)
    {
        $data = [
            'token'=> 'null',
            'is_active' => 1
        ];
        return $this->model->where('token',$token)->update($data);
    }
}