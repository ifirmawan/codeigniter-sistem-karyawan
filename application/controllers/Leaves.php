<?php

/**
* 
*/
class Leaves extends Apps
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->vars($this->user_profile);
	}
	function index(){
		$data['nav_model'] = 'nav_leaves_request';
		$this->menu_leave_myleave();
		$this->app_view('leave-menu-request',$data);
	}
	function leave_approve(){
		$data['nav_model'] = 'nav_leaves_allocation';
		$this->menu_leave_myleave();
		$this->app_view('leave-to-approve',$data);
	}
	function summary(){
		$data['nav_model'] = 'nav_leaves_summary';
		$this->menu_leave_myleave();
		$this->app_view('leave-menu-myleave-summary',$data);
	}
	function allocation_request(){
		$data['nav_model'] = 'nav_leaves_allocation_request';
		$this->menu_leave_myleave();
		$this->app_view('leave-menu-allocations',$data);
	}
	function leaves_report(){
		$data['nav_model'] = 'nav_leaves_report';
		$this->menu_leave_myleave();
		$this->app_view('leave-menu-report',$data);
	}
	function leaves_approve_type_edit(){
		$data['nav_model'] = 'nav_leaves_approve_type_edit';
		$this->menu_leave_myleave();
		$this->app_view('leave-to-approve-type-edit',$data);	
	}
	function leaves_approve_type_list(){
		$data['nav_model'] = 'nav_leaves_approve_type_list';
		$this->menu_leave_myleave();
		$this->app_view('leave-to-approve-type-list',$data);	
	}
	function leaves_allocations(){
		$data['nav_model'] = 'nav_leaves_allocation';
		$this->menu_leave_myleave();
		$this->app_view('leave-menu-allocations',$data);	
	}
	function leaves_request(){
		$data['nav_model'] = 'nav_leaves_request';
		$this->menu_leave_myleave();
		$this->app_view('leave-menu-request',$data);	
	}
	function allocation_request_new(){
		$data['nav_model'] = 'nav_leaves_allocation';
		$this->menu_leave_myleave();
		$this->app_view('allocation-request-new',$data);	
	}
}
