<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItems extends Model
{
    use HasFactory;

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function orders(): BelongsTo
    {
        return $this->belongsTo(Orders::class);
    }

    public function products(): BelongsTo
    {
        return $this->belongsTo(Products::class);
    }


}
