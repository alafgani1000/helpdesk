<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTeam extends Model
{
    protected $fillable = ['user_id','team_id'];

    public function users()
    {
        return $this->hashMany('App\Team');
    }
}
