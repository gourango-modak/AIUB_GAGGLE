<?php 

class FAQ_question
{
	private string $question;
	private string $time_stamp;
	private int $faq_id;
	private FAQ_answer answers;
	function __construct()
	{
		answers = array();
	}
	function get_Question_answers() {
		return $answers;
	}
	function set_Question_answers($answers) {
		this->answers = $answers;
	}
	function get_Question() {
		return $question;
	}
	function set_Question($question) {
		this->question = $question;
	}
	function get_Time() {
		return $time_stamp;
	}
	function set_Time($tm) {
		this->time_stamp = $tm;
	}
	function get_FAQ_ID() {
		return $faq_id;
	}
	function set_FAQ_ID($faq_id) {
		this->faq_id = $faq_id;
	}
	
}



>