<?php

/**
* 
*/
class Contacts extends Apps
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$data['emp_list'] = $this->db->get('employee')->result_array();
		$data['nav_model'] = 'nav_contact';
		$this->menu_leave_sample();
		$this->app_view('contact-list-card',$data);
	}
	function list_tabel(){
		$data['nav_model'] = 'nav_contact';
		$this->menu_leave_sample();
		$this->app_view('contact-list-tabel',$data);
	}
}
