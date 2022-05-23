<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function photos()
    {
        return $this->hasMany(Photo::class, 'topic_id', 'id');
    }
}
