<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name'];

    public function userTeam()
    {
        return $this->hasOne('App\UserTeam');
    }
}
