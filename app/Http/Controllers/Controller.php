<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\File;
use UxWeb\SweetAlert\SweetAlert;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function setImageUpload($file, $path, $old_file = null)
    {
        $file_name = time() . "_" . $file->getClientOriginalName();
        if ($file->move(public_path($path), $file_name)) {
            if ($old_file) {
                File::delete(public_path($path . '/' . $old_file));
            }
            return $file_name;
        } else {
            SweetAlert::error('Foto gagal diunggah', 'gagal')->persistent('tutup');
            return back();
        }
    }
}
