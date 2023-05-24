<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Technology extends Model
{
    use HasFactory;

    public function logo(): BelongsTo
    {
        return $this->belongsTo(Logo::class);
    }
}
