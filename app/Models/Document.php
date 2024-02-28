<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use File;

class Document extends Model
{
    use HasTranslations;

    use HasFactory;

    protected $fillable = ['title', 'author', 'doc_thumnail', 'doc_images', 'doc_file', 'status', 'published_at'];

    public array $translatable = ['title'];

    protected $casts = [
        'doc_images' => 'array'
    ];

    public function shortTitle() {
        return Str::limit(strip_tags($this->title), 80);
    }

    public function breadTitle() {
        return Str::limit(strip_tags($this->title), 10);
    }

    public function getFileSize()
    {
        $filepath = public_path("storage/{$this->doc_file}");
        $file = File::size($filepath);
        $fileSizeInMB = $file/1000000;
        $fileSize = round($fileSizeInMB, 2);
        return ($fileSize);
    }
}
