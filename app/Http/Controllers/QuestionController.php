<?php  namespace App\Http\Controllers;


use App\Question;
use App\Repositories\QuestionRepository;
use App\School;
use App\Transformers\QuestionTransformer;
use Dingo\Api\Routing\Helpers;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller {

	use Helpers;
	/**
	 * @var QuestionRepository
	 */
	private $questions;

	/**
	 * @param QuestionRepository $questions
	 */
	function __construct(QuestionRepository $questions)
	{
		$this->questions = $questions;
	}

	public function recent()
	{
		return $this->response->collection($this->questions->recent(), new QuestionTransformer);
	}

} 