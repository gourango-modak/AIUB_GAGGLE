<?php 

class Login_Activity
{
	private string $last_activity;
	private int $login_id;
	function __construct()
	{
	}
	function get_Last_Activity() {
		return $last_activity;
	}
	function set_Last_Activity($la) {
		this->last_activity = $la;
	}

	function get_Login_ID() {
		return $login_id;
	}
	function set_Login_ID($lid) {
		this->login_id = $lid;
	}
	
}



>