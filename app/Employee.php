<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model {



    protected $fillable = [ 'company_id','name'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];
}