<?php
/**
 *
 */

namespace App\Repositories\User\Family;


use App\Contracts\User\Family\FamilyInterface;
use App\Models\User\Home;
use App\Models\User\People;
use Illuminate\Support\Facades\Auth;

class FamilyRepository implements FamilyInterface
{
    protected $model;
    protected $homeModel;


    public function __construct(People $model,Home $homeModel)
    {
        $this->model = $model;
        $this->homeModel = $homeModel;

    }


    /**
     * @return mixed
     */
    public function getPeoples()
    {
        $id = Auth::user()->id;
        return $this->model->select()->where('user_id',$id)->get();

    }

    /**
     * Store User
     * @param $data
     * @return mixed|void
     */
    public function store($data)
    {
        $data['user_id'] = Auth::user()->id;
        return  $this->model->create($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function create(){
        $id = Auth::user()->id;
        return $this->homeModel->select()->where('user_id',$id)->get();
    }
    public function delete($id)
    {
        return $this->model->where('id', $id)->delete();
    }

}