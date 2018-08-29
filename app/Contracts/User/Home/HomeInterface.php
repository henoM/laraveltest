<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/22/18
 * Time: 6:55 PM
 */

namespace App\Contracts\User\Home;


interface HomeInterface
{

    /**
     * @return mixed
     */
    public function gethomes();

    /**
     * Store
     * @param $data
     * @return mixed
     */
    public function store($data);


    /**
     * @return mixed
     */
    public function create();

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);
}