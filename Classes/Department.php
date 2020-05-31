<?php 

class Department
{
	private string $name;
	private int $dept_id;
	function __construct()
	{
	}
	function get_Name() {
		return $name;
	}
	function set_Name($name) {
		this->name = $name;
	}
	function get_Department_ID() {
		return $dept_id;
	}
	function set_Department_ID($did) {
		this->dept_id = $did;
	}
	
}



>