<?php
	
	namespace App;
	
	use Illuminate\Database\Eloquent\Model;
	
	class Vocabulary extends Model
	{
		protected $fillable = [
			'vocabulary', 'pronunciation', 'type', 'synonym', 'mean', 'ex'
		];
		
		public function test()
		{
			return $this->belongsTo('Test', 'test_id', 'id');
		}
		
		public function user()
		{
			return $this->belongsTo('User', 'user_id', 'id');
		}
	}
