<?php

class Hrd extends Apps{

	function __construct(){
		parent::__construct();
			
	}

	function index(){		
		$data['bg_img']		='application-switcher-bg.jpg';
		$this->menu_leaves();
		$this->app_view('home',$data);
	}

	function home_notif(){	
		$data['bg_img']		='application-switcher-bg.jpg';
		$this->menu_leaves();
		$this->app_view('home-notif',$data);
	}

	function home_expired(){	
		$data['bg_img']		='application-switcher-bg.jpg';
		$this->menu_leaves();
		$this->app_view('home-expired',$data);
	}

	function logout(){
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();		
		redirect('login','refresh');
	}

}
