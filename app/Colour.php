<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colour extends Model
{
    protected $fillable = [
      "name", "rgb", "description", "enabled"
    ];
}
