<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncidentAttachment extends Model
{
    protected $fillable = ['file_name','file_location','incident_id','alias'];

    public function incident()
    {
        return $this->belongsTo('App\Incident');
    }
}
