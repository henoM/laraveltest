<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/22/18
 * Time: 6:55 PM
 */

namespace App\Contracts\User\Home;


interface FileInterface
{

    /**
     * @return mixed
     */
    public function upload($data);

}