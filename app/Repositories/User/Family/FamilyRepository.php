<?php
/**
 *
 */

namespace App\Repositories\User\Family;


use App\Contracts\User\Family\FamilyInterface;
use App\Models\User\People;

class FamilyRepository implements FamilyInterface
{
    protected $model;

    public function __construct(People $model)
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
        $this->model->create($data);
        dd(2);
    }
}