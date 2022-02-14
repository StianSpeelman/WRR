<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Record extends Model
{
    public function genres(): BelongsTo
    {
        return $this->belongsTo('App\Models\Genre')->withDefault();
    }
}
