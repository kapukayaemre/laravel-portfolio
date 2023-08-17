<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillItem extends Model
{
    protected $fillable = [
        "name",
        "percent",
        "color"
    ];
}
