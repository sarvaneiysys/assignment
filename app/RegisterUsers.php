<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegisterUsers extends Model
{
    //
    protected $table = "registeruser";
    protected $fillable =["name", "email", "photo"];
}
