<?php
/**
*
*/
class Portal extends CMS_Controller{

	function __construct()
	{
		parent::__construct();
		$this->setup_enqueue();
		$this->template->set_template('templates/default');
		$this->session_user_true();
	}

	function setup_enqueue(){
		$this->set_css(array('bootstrap/bootstrap.min'));		
		$this->set_js(array('jquery-2.1.4','bootstrap.min'));
		$this->data['render_css'] = $this->load_stylesheet();
		$this->data['render_js']	= $this->load_scriptjs();
		$this->load->vars($this->data);
	}
	
	function login_view($data=array()){
		$this->template->content->view('form/login', $data);
       	$this->template->publish();
	}

	function forgot_password_view($data=array()){

		$this->template->content->view('form/forgot_password', $data);
       	$this->template->publish();
	}
}
