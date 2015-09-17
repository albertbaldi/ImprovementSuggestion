<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Importance extends Model
{
	use SoftDeletes;
	
	protected $fillable = ['description'];
	protected $guarded = ['id'];
	protected $dates = ['deleted_at'];

}
