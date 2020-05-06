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

    public function requestsApps()
    {
        return $this->hasMany('App\Request');
    }

    public function scopeOpen($query)
    {
        $query->where('id',1);
    }

    public function scopeClose($query)
    {
        $query->where('id',2);
    }
}
