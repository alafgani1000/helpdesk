<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestAttachment extends Model
{
    protected $fillable = ['file_name','file_location','request_id'];

    public function request()
    {
        return $this->belongsTo('App\Request');
    }
}
