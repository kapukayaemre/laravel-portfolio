<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterInfo extends Model
{
    protected $fillable = [
        "info",
        "powered_by",
        "copyright"
    ];
}
