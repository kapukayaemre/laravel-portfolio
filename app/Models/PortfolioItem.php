<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
