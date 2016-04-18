<?php  namespace App\Repositories;

use App\Question;
use Illuminate\Support\Facades\Cache;

class QuestionRepository {

	public function recent($count = 10)
	{
		return Cache::remember('questions.recent', 2, function() use ($count) {
			return Question::where('state', '=', 2)->orderBy('updated_at', 'DESC')->limit($count)->get();
		});
	}

}