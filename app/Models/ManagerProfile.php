<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManagerProfile extends Model
{
    use HasFactory;

    protected $fillable = ['manager_image'];

}
