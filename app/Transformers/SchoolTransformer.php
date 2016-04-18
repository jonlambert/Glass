<?php namespace App\Transformers;

use App\School;
use League\Fractal\TransformerAbstract;

class SchoolTransformer extends TransformerAbstract {

	public function transform(School $school)
	{
		$item = [
			'name'  => $school->school_name
		];

		return $item;
	}
}

