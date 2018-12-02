<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable =[
        'adminusernamr',
        'adminpassword',
        'name',
        'adminemail',
        'adminphonenumber',
        'about'
    ];

}
