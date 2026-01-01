<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
     protected $fillable = [
        'archive_id', 'user_id',
    ];

    public function edition()
    {
        return $this->belongsTo(Archive::class,'archive_id');
    }
}
