<?php

namespace App\Models\Tsutaya;

use Illuminate\Database\Eloquent\Model;

class BookTranslation extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'title', 
        'description'
    ];
}
