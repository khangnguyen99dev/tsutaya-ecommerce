<?php

namespace App\Models\Tsutaya;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookCategory extends Model
{
    use SoftDeletes;

    protected $table = "book_categories";

    public $timestamps = true;

    protected $fillable = [
        "book_id",
        "category_id",  
    ];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
