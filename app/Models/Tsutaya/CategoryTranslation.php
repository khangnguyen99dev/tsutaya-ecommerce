<?php

namespace App\Models\Tsutaya;

use Illuminate\Database\Eloquent\Model;

class CategoryTranslation extends Model
{
    public $table = 'category_translations';
    public $timestamps = false;
    protected $fillable = ['title'];
}
