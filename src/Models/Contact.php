<?php

namespace Zalluq\Contactus\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table = 'contacts';

    protected $fillable = ['name','email','type','message'];


}
