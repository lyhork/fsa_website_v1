<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MainSpeech extends Model
{
    use HasFactory;

    use HasTranslations;

    protected $fillable = ['speech_image', 'content', 'status'];

    public array $translatable = ['content'];

    protected $casts = [
        'content' => 'json'
    ];
}
