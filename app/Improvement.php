<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Improvement extends Model
{
	use SoftDeletes;

	protected $fillable = ['product', 'description', 'user_id', 'customerSize_id', 'importance_id', 'difficulty_id'];
	protected $guarded = ['id'];
	protected $dates = ['deleted_at'];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function importance()
	{
		return $this->belongsTo(Importance::class);
	}

	public function difficulty()
	{
		return $this->belongsTo(Difficulty::class);
	}

	public function customerSize()
	{
		return $this->belongsTo(CustomerSize::class, 'customerSize_id', 'id');
	}
}
