<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        "title",
        "description",
        "image",
        "phone",
        "email"
    ];
}
