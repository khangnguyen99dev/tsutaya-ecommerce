<?php

namespace App\Models\Tsutaya;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class BookAuthor extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    protected $fillable = [
        'book_id',
        'author_id',
    ];

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class, 'author_id', 'id');
    }
}
