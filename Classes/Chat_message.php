<?php 

class Chat_message
{
	private string $msg;
	private string $time_stamp;
	private User $from_user;
	private User $to_user;
	private int $chat_id;
	private int $status;
	function __construct()
	{
		$status = 1;
	}
	function get_Message() {
		return $msg;
	}
	function set_Message($msg) {
		this->msg = $msg;
	}
	function get_Time() {
		return $time_stamp;
	}
	function set_Time($tm) {
		this->time_stamp = $tm;
	}
	function get_From_User() {
		return $from_user;
	}
	function set_From_User($fu) {
		this->from_user = $fu;
	}
	function get_To_User() {
		return $to_user;
	}
	function set_To_User($tu) {
		this->to_user = $tu;
	}
	function get_Chat_ID() {
		return $chat_id;
	}
	function set_Chat_ID($cid) {
		this->chat_id = $cid;
	}
	function get_Status() {
		return $status;
	}
	function set_Status($st) {
		this->status = $st;
	}
}



>