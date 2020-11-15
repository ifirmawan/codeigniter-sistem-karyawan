<?php

/**
* 
*/
class Calender extends Apps
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$data['nav_model'] = 'nav_calender_subject_options';
		$this->menu_leave_sample();
		$this->app_view('calender-subject-options',$data);
	}
	
}
