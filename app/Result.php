<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
	protected $fillable = [
		'pass'
	];
	public function test() {
		return $this->belongsTo('Test','test_id','id');
	}
	
	public function user() {
		return $this->belongsTo('User','user_id','id');
	}
}
