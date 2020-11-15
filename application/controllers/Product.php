<?php

/**
* 
*/
class Product extends Apps
{
	
	function __construct()
	{
		parent::__construct();
	}
	function index(){
		$data['nav_model'] = 'nav_product_list_card';
		$this->menu_product();
		$this->app_view('product-list-card',$data);
	}
	function prod_list_tabel(){
		$data['nav_model'] = 'nav_product_list_card';
		$this->menu_leave_sample();
		$this->app_view('product-list-tabel',$data);
	}
	function prod_create_general_information(){
		$data['nav_model'] = 'nav_product_list_card';
		$this->menu_leave_sample();
		$this->app_view('product-create-general-information',$data);
	}







	function product_configuration(){
		$data['nav_model'] = 'nav_product_configuration';
		$this->menu_product();
		$this->app_view('product-configuration',$data);
	}
	function create_product_categories(){
		$data['nav_model'] = 'nav_product_configuration_create_product_categories';
		$this->menu_product();
		$this->app_view('product-configuration-create-product-categories',$data);
	}
	function product_create_inventory(){
		$data['nav_model'] = 'nav_product_create_inventory';
		$this->menu_product();
		$this->app_view('product-create-inventory',$data);
	}


}