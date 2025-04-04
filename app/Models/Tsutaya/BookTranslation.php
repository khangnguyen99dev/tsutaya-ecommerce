<?php

namespace App\Models\Tsutaya;

use Illuminate\Database\Eloquent\Model;
class BookTranslation extends Model
{

    protected $table = 'book_translations';

    public $timestamps = false;
    
    protected $fillable = [
        'title', 
        'description'
    ];
}
