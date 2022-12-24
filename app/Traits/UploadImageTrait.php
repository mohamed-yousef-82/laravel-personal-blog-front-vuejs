<?php
namespace App\Traits;
use Illuminate\Http\Request;
Trait UploadImageTrait
{
    public function UploadImage(Request $request,$folder)
    {
        $file = $request->file('image');
        $path = $file->store($folder,'store');
        return $path;

    }
}