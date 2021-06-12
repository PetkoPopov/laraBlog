<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * $post->short
     * get<porpname>Attribute
     */
    public function getShortAttribute()
    {
        if($this->content){
            return mb_substr($this->content, 0,20).'....';
        }else{
            return '';
        }
    }
    public function author()
    {
        //$this->outhor->name;
        
        return $this->belongsTo(User::class,'user_id');
    }
}
