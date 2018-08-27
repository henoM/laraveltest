<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/22/18
 * Time: 6:55 PM
 */

namespace App\Contracts\Admin\User;


interface UserInterface
{
    /**
     * Store
     * @param $data
     * @return mixed
     */
    public function store($data);

    /**
     * Get all data
     * @param $data
     * @return mixed
     */
    public function getData();

    /**
     * Get user data for update
     * @param $data
     * @return mixed
     */
    public  function  getById($id);

    /**
     * update user
     * @param $data
     * @return mixed
     */
    public  function  update($data,$id);

    /**
     * Deleted user
     * @param $data
     * @return mixed
     */
    public  function  delete($id);

    /**
     * @param $data
     * @param $id
     * @return mixed
     */
    public  function  activate($data);
}