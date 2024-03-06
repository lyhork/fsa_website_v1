<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Slideshow extends Model
{
    use HasFactory;

    use HasTranslations;

    protected $fillable = ['slideshow_image','quote','author', 'status'];

    public array $translatable = ['author','quote'];

    protected $casts = [
        'quote' => 'json',
        'author' => 'json'
    ];
}
