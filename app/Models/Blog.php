<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Support\Str;

class Blog extends Model
{

    use HasTranslations;

    use HasFactory;
    protected $fillable = ['title', 'author', 'content', 'image', 'images', 'url', 'status', 'published_at'];

    public array $translatable = ['title', 'content'];

    protected $casts = [
        'images' => 'array'
    ];

    public function shortBody() {
        return Str::limit(strip_tags($this->content), 100);
    }

    public function shortTitle() {
        return Str::limit(strip_tags($this->title), 80);
    }

    public function breadTitle() {
        return Str::limit(strip_tags($this->title), 10);
    }

}
