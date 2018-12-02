<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'xposts';
    protected $fillable = [
        'title',
        'passage'
    ];

    public function photos()
    {
        return $this->belongsToMany(Photo::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class , 'user_xpost' , 'xpost_id');
    }


}
