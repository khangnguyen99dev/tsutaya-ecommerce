<?php

namespace App\Models\Tsutaya;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
class Image extends Model
{
    use SoftDeletes;

    protected $table = 'images';

    protected $fillable = [
        'url',
    ];

    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }
}
