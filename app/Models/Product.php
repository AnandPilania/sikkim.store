<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function getPriceAttribute()
    {
        return '₹ '.($this->attributes['price'] / 100);
    }

    public function getOriginalPriceAttribute()
    {
        return '₹ '.(($this->attributes['price']/ 100) + 20);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
