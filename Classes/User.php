<?php 

class User
{
	private string $name;
	private string $email;
	private string $aiub_id;
	private string $imgurl;
	private string $phone;
	private string $password;
	private string $dob;
	private int $user_id;
	private User_status $ustatus;
	private Research $research;
	private Research_domain $research_domain;
	private User $following_users;
	private Subject $expertise;
	private Login $log_info;
	function __construct()
	{
		$ustatus = array();
		$research = array();
		$research_domain = array();
		$following_users = array();
		$expertise = array();
		$log_info = array();
	}
	function get_Login_Activity() {
		return $log_info;
	}
	function set_Login_Activity($la) {
		this->log_info = $la;
	}
	function get_Expertise() {
		return $expertise;
	}
	function set_Expertise($ex) {
		this->expertise = $ex;
	}
	function get_Following_Users() {
		return $following_users;
	}
	function set_Following_Users($fu) {
		this->following_users = $fu;
	}
	function get_User_Status() {
		return $ustatus;
	}
	function set_User_Status($ustat) {
		this->ustatus = $ustat;
	}
	function get_Research() {
		return $research;
	}
	function set_Research($rh) {
		this->research = $rh;
	}
	function get_Research_Domain() {
		return $research_domain;
	}
	function set_Research($rd) {
		this->research_domain = $rd;
	}
	function get_Name() {
		return $name;
	}
	function set_Name($name) {
		this->name = $name;
	}
	function get_Email() {
		return $email;
	}
	function set_Email($em) {
		this->email = $em;
	}
	function get_Password() {
		return $password;
	}
	function set_Password($pass) {
		this->password = $pass;
	}
	function get_Aiub_id() {
		return $aiub_id;
	}
	function set_Aiub_id($id) {
		this->aiub_id = $id;
	}
	function get_Dob() {
		return $dob;
	}
	function set_Dob($dob) {
		this->dob = $dob;
	}
	function get_Image_Url() {
		return $imgurl;
	}
	function set_Image_Url($img) {
		this->imgurl = $img;
	}
	function get_Phone() {
		return $phone;
	}
	function set_Phone($ph) {
		this->phone = $ph;
	}
	function get_User_ID() {
		return $user_id;
	}
	function set_User_ID($uid) {
		this->user_id = $uid;
	}
}



>