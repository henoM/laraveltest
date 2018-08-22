<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/22/18
 * Time: 6:54 PM
 */

namespace App\Repositories;


use App\Contracts\IUserService;
use App\User;

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
        return $this->model->create($data);
    }

    public function getData($id)
    {
        return $this->model->where('id', $id)->first();
    }

    public function update($id, $data)
    {
        return $this->model->where('id', $id)->update($data);
    }
}