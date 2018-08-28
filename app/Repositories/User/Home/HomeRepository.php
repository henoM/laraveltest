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
    public function addHome($data)
    {
        //
    }
}