<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;

class AboutUs extends Model
{
    use HasFactory;

    protected $fillable = ['aboutus_file'];

    public function getFileSize()
    {
        $filepath = public_path("storage/{$this->aboutus_file}");
        $file = File::size($filepath);
        $fileSizeInMB = $file/1000000;
        $fileSize = round($fileSizeInMB, 2);
        return ($fileSize);
    }
}
