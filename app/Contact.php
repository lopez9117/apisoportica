<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //


    protected $table = 'contacts';

     protected $fillable = [
        'name', 'telephone','email','city','affair','comments','messages'
    ];

}
