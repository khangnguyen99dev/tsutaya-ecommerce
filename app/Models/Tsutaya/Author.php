<?php

namespace App\Models\Tsutaya;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name'];
    public $timestamps = true;
}
