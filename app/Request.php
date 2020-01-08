<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = ['title','business_need','business_requirment','business_value','user_id','phone','stage_id','resolve_date'];

    public function requestAttachments()
    {
        return $this->hasMany('App\RequestAttachment');
    }
    
    public function stage()
    {
        return $this->belongsTo('App\Stage');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
