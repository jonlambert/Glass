<?php namespace App\Transformers;

use App\Question;
use League\Fractal\TransformerAbstract;

class QuestionTransformer extends TransformerAbstract {

	protected $availableIncludes = [
		'school'
	];

	public function transform(Question $question)
	{
		$item = [
			'id'    => $question->id,
			'created'  => $question->created_at,
			'updated'  => $question->updated_at,
			'body' => $question->body,
			'author' => $question->student_name
		];
		$item['school'] = ($question->school)? $question->school->school_name : null;

		$question->school()->get();

		return $item;
	}

	public function includeSchool(Question $question)
	{
		if (! $question->school)
			return null;

		return $this->item($question->school, new SchoolTransformer);
	}
}

