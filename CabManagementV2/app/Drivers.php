<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    //
    protected $table = 'drivers';
	protected $fillable = ['d_id','name','email','contact', 'address', 'PAN','license','contract', 'approx_location', 'availability_flag'];
	public $timestamps = false;
}
