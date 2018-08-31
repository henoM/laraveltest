<?php
/**
 *
 */

namespace App\Repositories\User\Home;


use App\Contracts\User\Home\HomeInterface;
use App\Models\User\Home;

class HomeRepository implements HomeInterface
{
    protected $model;

    public function __construct(Home $model)
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


    /**
     * @param $id
     * @return Home|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|mixed|null|object
     */
    public function home($id)
    {
       return  $this->model->findOrFail($id);
    }


    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->where('id', $id)->delete();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->where('id',$id)->first();
    }

    /**
     * @param $id
     * @param $request
     * @return mixed
     */
    public function update($id, $request)
    {
        $data = [
            'name'=>$request->name,
            'address'=>$request->address
        ];
        return $this->model->where('id', $id)->update($data);
    }
}