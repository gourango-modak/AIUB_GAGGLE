<?php 

class User_status
{
	private string $start_time;
	private string $place;
	private string $end_time;
	private string $status_time;
	private int $status_id;
	private Subject $sub_list;
	function __construct()
	{
		$sub_list = array();
	}
	function get_Start_Time() {
		return $start_time;
	}
	function set_Start_Time($time) {
		this->start_time = $time;
	}
	function get_Place() {
		return $place;
	}
	function set_Place($pl) {
		this->place = $pl;
	}
	function get_End_Time() {
		return $end_time;
	}
	function set_End_Time($time) {
		this->end_time = $time;
	}
	function get_Status_Time() {
		return $status_time;
	}
	function set_Status_Time($time) {
		this->status_time = $time;
	}
	function get_Status_ID() {
		return $status_id;
	}
	function set_Status_ID($sid) {
		this->status_id = $sid;
	}
}



>