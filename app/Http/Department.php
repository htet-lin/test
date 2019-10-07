<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public   $rules = [
        'name' => 'required',
        'prefix' => 'required',
    ];
    
    protected $fillable = ['name', 'prefix'];
}
