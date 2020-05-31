<?php 

class Research
{
	private string $pub_year;
	private string $file_name;
	private Research_domain $res_domain;
	private int $res_id;

	function __construct()
	{
	}
	function get_Publication_Year() {
		return $pub_year;
	}
	function set_Publication_Year($py) {
		this->pub_year = $py;
	}
	function get_File_Name() {
		return $file_name;
	}
	function set_File_Name($fn) {
		this->file_name = $fn;
	}
	function get_Research_Domain() {
		return $res_domain;
	}
	function set_Research_Domain($res_d) {
		this->res_domain = $res_d;
	}
	function get_Research_ID() {
		return $res_id;
	}
	function set_Research_ID($rid) {
		this->res_id = $rid;
	}
	
}



>