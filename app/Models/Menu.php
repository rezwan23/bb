<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name', 'slug', 'parent_id', 'serial', 'is_mega'
    ];
    public function subMenus()
    {
        return $this->hasMany('App\Models\Menu', 'parent_id');
    }

    public function menu()
    {
        return $this->belongsTo('App\Models\Menu', 'parent_id');
    }
}
