<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocView extends Model
{
    use HasFactory;

    protected $fillable = ['ip_address','user_agent','document_id'];

    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
