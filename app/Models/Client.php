<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function topic()
    {
        return $this->belongsTo(Topic::class, 'topic_id', 'id');
    }
}


