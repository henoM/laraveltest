<?php
/**
 *
 */

namespace App\Repositories\User\Home;


use App\Contracts\User\Home\FileInterface;
use Illuminate\Support\Facades\Storage;

class FileRepository implements FileInterface
{
    /**
     * Store User
     * @param $data
     * @return mixed|void
     */

    /**
     * @return mixed
     */
    public function upload($file,$id)
    {
        return Storage::disk('public')->putFile('homes/home'.$id, $file);
    }

}