<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CustomerSize extends Model
{
	use SoftDeletes;

	protected $table = 'customer_sizes';
	
	protected $fillable = ['description'];
	protected $guarded = ['id'];
	protected $dates = ['deleted_at'];
}
