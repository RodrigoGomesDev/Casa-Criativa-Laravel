<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ideia extends Model
{
    protected $fillable = ['title', 'category', 'image', 'description', 'link'];
}
