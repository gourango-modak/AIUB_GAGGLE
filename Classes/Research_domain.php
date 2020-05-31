<?php 

class Research_domain
{
	private string $name;
	private int $domain_id;
	private Department $dept;
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

	function get_Domain_ID() {
		return $domain_id;
	}
	function set_Domain_ID($did) {
		this->domain_id = $did;
	}
	
}



>