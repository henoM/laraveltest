<?php
/**
 *
 */

namespace App\Repositories\User\Home;


use App\Contracts\User\Home\HomeInterface;
use App\Models\User\Home;
use App\Models\User\People;
use Illuminate\Support\Facades\Auth;

class HomeRepository implements HomeInterface
{
    protected $model;
    protected $peopleModel;

    public function __construct(Home $model,People $peopleModel)
    {
        $this->model = $model;
        $this->peopleModel = $peopleModel;
    }

    /**
     * Store User
     * @param $data
     * @return mixed|void
     */

    /**
     * @return mixed
     */
    public function getHomes()
    {
        $id = Auth::user()->id;
        return $this->model->with('Peoples')->select()->where('user_id',$id)->get();
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
     * @return mixed
     */
    public function create(){
        $id = Auth::user()->id;
        return $this->peopleModel->select()->where('user_id',$id)->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->where('id', $id)->delete();
    }
}