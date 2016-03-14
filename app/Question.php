<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model {

	public function school()
	{
		return $this->belongsTo(School::class, 'school_id');
	}

} 