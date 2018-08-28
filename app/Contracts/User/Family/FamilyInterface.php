<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/22/18
 * Time: 6:55 PM
 */

namespace App\Contracts\User\Family;


interface FamilyInterface
{
    /**
     * Store
     * @param $data
     * @return mixed
     */
        public function store($data);

}