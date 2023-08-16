<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PortfolioItem extends Model
{
    protected $fillable = [
        "image",
        "title",
        "category_id",
        "description",
        "client",
        "website"
    ];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class, "id", "category_id");
    }
}
