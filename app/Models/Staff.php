<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Staff extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $fillable = ['name','position','department','image', 'status'];
    public array $translatable = ['name','position','department'];
}
