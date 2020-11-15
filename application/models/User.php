<?php

/**
* 
*/
class User extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

	function verify($username='',$password='')
	{
		return $this->db->get_where('user',array('user_name'=>$username,'user_password'=>sha1($password)))->row();
	}
}