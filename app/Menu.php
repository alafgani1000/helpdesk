<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['kode','url','label','name'];

    public function roles()
    {
        return $this->belongsToMany('App\Role')->withTimestamps();
        
    }    
}
