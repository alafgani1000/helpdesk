<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $fillable = ['text','location','phone','user_id','stage_id','resolve_text','resolve_date'];
    
    public function incidentAttachments()
    {
        return $this->hasMany('App\IncidentAttachment');
    }

    public function stage()
    {
        return $this->belongsTo('App\Stage');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function team()
    {
        return $this->belongsTo('App\Team');
    }
}
