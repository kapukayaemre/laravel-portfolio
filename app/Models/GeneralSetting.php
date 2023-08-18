<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    protected $fillable = [
        "logo",
        "footer_logo",
        "favicon"
    ];
}
