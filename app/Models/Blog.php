<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{

    use HasTranslations;

    use HasFactory;
    protected $fillable = ['title', 'author', 'content', 'image', 'images', 'status', 'published_at'];

    public array $translatable = ['title', 'content'];

    protected $casts = [
        'images' => 'array'
    ];


}
