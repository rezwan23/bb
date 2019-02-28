<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteConfiguration extends Model
{
    protected $fillable = [
        'name', 'meta', 'logo', 'fb', 'pinterest', 'g_plus', 'twitter', 'description'
    ];
}
