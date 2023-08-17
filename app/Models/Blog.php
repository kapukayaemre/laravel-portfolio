<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Blog extends Model
{
    protected $fillable = [
        "image",
        "title",
        "description",
        "category_id"
    ];

    public function category(): HasOne
    {
        return $this->hasOne(BlogCategory::class, "id", "category_id");
    }
}
