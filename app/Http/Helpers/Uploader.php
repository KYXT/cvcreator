<?php

namespace App\Http\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

/**
 * Class Uploader
 * @package App\Http\Helpers
 */
class Uploader
{
    /**
     * @param UploadedFile $file
     * @return string
     */
    public static function uploadImage(UploadedFile $file): string
    {
        $path = 'cv-images';
        $name = Str::random(10) . time() . '.' . $file->getClientOriginalExtension();

        $image = Image::make($file->getRealPath());
        $canvas = Image::canvas(420, 350, '#FFFFFF');
        $image->resize(420, 350, function ($constraint) {
            $constraint->aspectRatio();
        });
        $canvas->insert($image, 'center');

        if (!file_exists(public_path($path))) {
            mkdir(public_path($path), 777, true);
        }

        $canvas->save($path . '/' . $name);

        return  '/' . $path . '/' . $name;
    }

    /**
     * @param string $path
     */
    public static function deleteAttachment(string $path)
    {
        $path = mb_substr($path, 1);

        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
