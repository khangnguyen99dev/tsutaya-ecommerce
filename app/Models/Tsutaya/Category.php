<?php

namespace App\Models\Tsutaya;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Category extends Model implements TranslatableContract
{
    use SoftDeletes, Translatable;

    protected $table = "categories";

    public $timestamps = true;

    public $translatedAttributes = ['name'];

    protected $fillable = [
        "parent_id",
    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, "book_categories", "category_id", "book_id");
    }
}
