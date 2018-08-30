<?php
/**
 *
 */

namespace App\Repositories\User\Family;


use App\Contracts\User\Family\PeopleInterface;
use App\Models\User\People;
class PeopleRepository implements PeopleInterface
{
    protected $model;


    public function __construct(People $model)
    {
        $this->model = $model;

    }


    /**
     * @return mixed
     */
    public function getPeoples($userId)
    {
        return $this->model->where('user_id',$userId)->get();

    }

    /**
     * Store User
     * @param $data
     * @return mixed|void
     */
    public function store($data,$userId)
    {
        $data['user_id'] = $userId ;

        return  $this->model->create($data);
    }
    /**
     * @param $id
     * @return People|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|mixed|null|object
     */
    public function people($id)
    {
       return $this->model->with('Homes')->select()->where('id',$id)->first();
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
        return $this->model->select()->where('id',$id)->first();
    }
    /**
     * @param $id
     * @param $request
     * @return mixed
     */
    public function edit($id, $request){
        $data = [
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'age' => $request->age,
        ];
        return $this->model->where('id', $id)->update($data);
    }
}