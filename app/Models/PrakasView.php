<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrakasView extends Model
{
    use HasFactory;

    protected $fillable = ['ip_address','user_agent','prakas_id'];

    public function prakas()
    {
        return $this->belongsTo(Prakas::class);
    }
}
