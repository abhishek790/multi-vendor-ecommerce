<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Categories::class);
    }

    public function orderItems(): HasMany
    {
        return $this->hasMany(OrderItems::class);
    }

    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Orders::class);
    }


}
