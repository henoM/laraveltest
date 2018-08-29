<?php
/**
 *
 */

namespace App\Repositories\User\Home;


use App\Contracts\User\Home\FileInterface;
use Illuminate\Support\Facades\Auth;
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
    public function upload($file)
    {
        return Storage::disk('public')->putFile('homes/home'.Auth::user()->id, $file);
    }

    /**
     * Store User
     * @param $data
     * @return mixed|void
     */

}