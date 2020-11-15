<?php

class Employees extends Apps
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$data['nav_model'] = 'nav_employees';
		$this->menu_employees();
		$this->app_view('employees-list-card',$data);
	}
	function employee_list_table(){
		$data['nav_model'] = 'nav_employees';
		$this->menu_employees();
		$this->app_view('employees-list-table',$data);
	}
	function create_employee(){
		$data['nav_model'] = 'nav_new_employee';
		$this->menu_employees();
		$this->app_view('employee-new',$data);	
	}
	function emp_departement(){
		$data['nav_model'] = 'nav_employee_departement';
		$this->menu_employees();
		$this->app_view('employee-departement',$data);
	}
	function emp_departement_list_table(){
		$data['nav_model'] = 'nav_employee_departement';
		$this->menu_employees();
		$this->app_view('employee-departement-table',$data);
	}
	function emp_new_departement(){
		$data['nav_model'] = 'nav_new_employee_departement';
		$this->menu_employees();
		$this->app_view('employee-new-departement',$data);
	}
	function modal(){
		$data['nav_model'] = 'nav_employee_departement';
		$this->menu_employees();
		$this->app_view('modal',$data);
	}
	/*function list(){
		$this->load->model('employee_model');
		var_dump($this->employee_model->get_company());
	}*/
}
