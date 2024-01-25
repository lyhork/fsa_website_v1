<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{

    use HasTranslations;

    use HasFactory;
    protected $fillable = ['title', 'author', 'content', 'image', 'images', 'status'];

    public array $translatable = ['title', 'content'];

    protected $casts = [
        'images' => 'array'
    ];

}
