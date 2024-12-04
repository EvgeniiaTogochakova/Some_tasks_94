<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    public $timestamps = true;
    protected $fillable = ['name', 'surname', 'email'];
}
