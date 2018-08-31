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
     * Store
     * @param $data
     * @return mixed
     */
    public function store($data);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @param $id
     * @return mixed
     */
    public function home($id);

    /**
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function update($id,$request);

}