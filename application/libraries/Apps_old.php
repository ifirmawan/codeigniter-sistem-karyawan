<?php
/**
*
*/
class Apps extends CMS_Controller{

	function __construct(){
		parent::__construct();
		$this->setup_enqueue();
		$this->template->set_template('templates/app_hrd');
		$this->session_user_false();
	}

	function setup_enqueue(){
		$this->set_css(array('bootstrap.min','cms-style','materialize.min'));
		$this->set_js(array('jquery-2.1.4','bootstrap.min','materialize.min'));
		$this->data['render_css'] = $this->load_stylesheet();
		$this->data['render_js']	= $this->load_scriptjs();
		$this->load->vars($this->data);
	}
	
	function app_view($page='home-profile-dropdown',$data=array()){
		$this->template->content->view('odoo/'.$page, $data);
		$this->template->publish();
	}

	function leaves_view($page='home-profile-dropdown',$data=array()){
		$this->template->content->view('odoo/'.$page, $data);
		$this->template->publish();
	}

	function myleaves_summary_view($page='leave-menu-myleave-summary',$data=array()){
		$this->template->content->view('odoo/'.$page, $data);
		$this->template->publish();
	}

	
}
