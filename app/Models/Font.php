<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use File;
use Spatie\Translatable\HasTranslations;


class Font extends Model
{
    use HasTranslations;

    use HasFactory;

    protected $fillable = ['title', 'font_file'];

    public array $translatable = ['title'];

    protected $casts = [
        'title' => 'json',
    ];

    public function getFileSize()
    {
        $filepath = public_path("storage/{$this->font_file}");
        $file = File::size($filepath);
        $fileSizeInMB = $file/1000000;
        $fileSize = round($fileSizeInMB, 2);
        return ($fileSize);
    }
}
