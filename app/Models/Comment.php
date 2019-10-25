<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'body'
    ];

    public function past(){
        return $this->bolongsTo('App\Models\Past');
    }
}
