<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherView extends Model
{
    use HasFactory;

    protected $fillable = ['ip_address','user_agent','other_id'];

    public function other()
    {
        return $this->belongsTo(Other::class);
    }
}
