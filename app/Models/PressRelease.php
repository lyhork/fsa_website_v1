<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Support\Str;
use File;

class PressRelease extends Model
{
    use HasTranslations;

    use HasFactory;

    protected $fillable = ['title', 'author', 'content', 'press_image', 'press_images', 'press_file', 'status', 'published_at'];

    public array $translatable = ['title', 'content'];

    protected $casts = [
        'title' => 'json',
        'press_images' => 'array'
    ];

    public function shortTitle() {
        return Str::limit(strip_tags($this->title), 80);
    }

    public function breadTitle() {
        return Str::limit(strip_tags($this->title), 10);
    }

    public function getFileSize()
    {
        $filepath = public_path("storage/{$this->press_file}");
        $file = File::size($filepath);
        $fileSizeInMB = $file/1000000;
        $fileSize = round($fileSizeInMB, 2);
        return ($fileSize);
    }
}
