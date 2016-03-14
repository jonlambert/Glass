<?php  namespace App\Http\Controllers;


use App\Question;
use App\School;
use App\Transformers\QuestionTransformer;
use Dingo\Api\Routing\Helpers;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller {

	use Helpers;

	public function recent()
	{
		DB::connection()->enableQueryLog();

//		dd(Question::first()->school);
//		dd(School::find(1190));
		return $this->response->collection(Question::orderBy('updated_at', 'DESC')->limit(10)->get(), new QuestionTransformer);
//		dd(DB::connection()->getQueryLog());
	}

} 