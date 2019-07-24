<?php
	
	namespace App;
	
	use Illuminate\Database\Eloquent\Model;
	
	class Test extends Model
	{
		public function vocabularies()
		{
			return $this->hasMany('Vocabulary', 'test_id', 'id');
		}
		
		public function user() {
			return $this->belongsTo('User','user_id','id');
		}
		
		public function results() {
			return $this->hasMany('Result','test_id','id');
		}
	}
