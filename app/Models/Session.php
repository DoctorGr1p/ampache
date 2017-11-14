<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public $incrementing = false;
    
    const CREATED_AT = 'logon_date';
    const UPDATED_AT = 'last_activity';
    
    protected $fillable = [
        'id','username','ip','type','user_agent','value','expiry','geo_latitude','geo_longitude', 'geo_name',
    ];
}