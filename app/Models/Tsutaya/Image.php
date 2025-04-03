<?php

namespace App\Models\Tsutaya;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Image extends Model
{
    public function imageable(): MorphTo
    {
        return $this->morphTo();
    }
}
