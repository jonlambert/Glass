<?php

use Laravel\Lumen\Testing\DatabaseTransactions;

class QuestionTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testQuestion()
    {
		$this->get('/api/questions/recent');
	    $this->assertResponseOk();
    }
}
