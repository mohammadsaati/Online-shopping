<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable =[
        'name',
        'time',
        'discription'
    ];
    public function users()
    {
        return $this->belongsToMany(User::class);
    }


}
