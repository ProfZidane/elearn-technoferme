<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    //
    protected $fillable = ['titre','description','cours','video','image'];
}
