<?php 

class Subject
{
	private string $name;
	private Department $dept;
	private int $sub_id;
	function __construct()
	{
	}
	function get_Name() {
		return $name;
	}
	function set_Name($name) {
		this->name = $name;
	}
	function get_Department() {
		return $dept;
	}
	function set_Department($dept) {
		this->dept = $dept;
	}
	function get_Subject_ID() {
		return $sub_id;
	}
	function set_Subject_ID($sid) {
		this->sub_id = $sid;
	}
	
}



>