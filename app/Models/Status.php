<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['content'];
    
    public function user()
    {
        // User::class -> App\Models\Status
        return $this->belongsTo(User::class);
    }
}
