<?php 

class FAQ_answer
{
	private string $answer;
	private string $time_stamp;
	private int $faq_ans_id;
	function __construct()
	{
	}
	function get_Answer() {
		return $answer;
	}
	function set_Answer($answer) {
		this->answer = $answer;
	}
	function get_Time() {
		return $time_stamp;
	}
	function set_Time($tm) {
		this->time_stamp = $tm;
	}
	function get_FAQ_Ans_ID() {
		return $faq_ans_id;
	}
	function set_FAQ_Ans_ID($faq_ans_id) {
		this->faq_ans_id = $faq_ans_id;
	}
	
}



>