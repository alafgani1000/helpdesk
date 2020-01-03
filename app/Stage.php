<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    protected $fillable = ['text','description'];

    public function incidents()
    {
        return $this->hasMany('App\Incident');
    }
}
