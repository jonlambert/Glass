<?php  namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * User: Jon
 * Date: 26/02/16
 * Time: 13:01
 */


class School extends Model {

	public function questions()
	{
		return $this->hasMany(Question::class);
	}

} 