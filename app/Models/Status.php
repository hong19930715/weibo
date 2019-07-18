<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function user()
    {
        // User::class -> App\Models\Status
        return $this->belongsTo(User::class);
    }
}
