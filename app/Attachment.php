<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    protected $fillable = ['post_id','name','link','published','ordering'];
    public function post() {
        return $this->belongsTo('App\Post');
    }
}
