<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    //
    protected $table = 'trips';
	protected $fillable = ['u_id','u_email','d_id', 'pickup_loc_lat', 'pickup_loc_long','drop_loc_lat', 'drop_loc_long', 'pickup_time', 'drop_time', 'status_flag'];
	public $timestamps = false;
}
