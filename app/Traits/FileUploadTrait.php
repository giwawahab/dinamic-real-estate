<?php
namespace App\Traits;

use File;
use Illuminate\Http\Request;

trait FileUploadTrait {

    function uploadImage(Request $request, string $inputName, ?string $oldPath = null, string $path = '/uploads'): ?string
    {
        if($request->hasFile($inputName)){
            $image = $request->{$inputName};
            $ext = $image->getClientOriginalExtension();
            $imageName = 'media_' . uniqid() . '.' . $ext;

            $image->move(public_path($path), $imageName);

            // Deleting previous image from storage if it exist
            $excludedFolder = '/default';

            if($oldPath && File::exists(public_path($oldPath)) && strpos($oldPath, $excludedFolder) !== 0){
                File::delete(public_path($oldPath));
            }

            return $path . '/' . $imageName;
        }

        return null;
    }
}
