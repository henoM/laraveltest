<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/22/18
 * Time: 6:55 PM
 */

namespace App\Contracts\User\Family;


interface PeopleInterface
{

    /**
     * @return mixed
     */
    public function getPeoples($userId);

    /**
     * Store
     * @param $data
     * @return mixed
     */
    public function store($data,$userId);

    /**
     * @param $id
     * @return mixed
     */
    public  function  delete($id);

    /**
     * @param $id
     * @return mixed
     */
    public function people($id);
    /**
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @param $id
     * @param $request
     * @return mixed
     */
    public function edit($id, $request);
}