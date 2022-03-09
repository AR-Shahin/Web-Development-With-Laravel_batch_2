<?php

namespace App\Action;

use Illuminate\Support\Facades\Storage;

class File
{

    public static function upload($file, $path)
    {
        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        Storage::putFileAs("public/$path", $file, $fileName);

        return "storage/$path/" . $fileName;
    }

    public static function deleteFile($file)
    {
        if (file_exists($file)) {
            unlink($file);
        }
    }

    public static function uploadPdf($file, $path)
    {
        info($file);
        $fileName = time() . '_' . uniqid() . '.' . 'pdf';
        Storage::putFileAs("public/$path", $file, $fileName);

        return "storage/$path/" . $fileName;
    }
}
