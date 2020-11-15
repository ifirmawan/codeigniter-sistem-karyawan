<?php
/**
*
*/
class Apps extends CMS_Controller{
	
	function __construct(){
		parent::__construct();
		$this->setup_enqueue();
		$this->session_user_false();
		$this->items['menu'] = array();
		$this->template->set_template('templates/hrd_tmpl');
		
	}

	function setup_enqueue(){
		$this->set_css(array('mdb/bootstrap.min','mdb/jvm-style','mdb/mdb.min','mdb/font-awesome.min','mdb/discuss-chat','mdb/megadropdown')); //,'mdb/monthly.min'
		$this->set_js(array('jquery-2.1.4','tether.min','bootstrap.min','mdb.min'));	//.'monthly''discuss-chat',
		$this->data['render_css'] = $this->load_stylesheet();
		$this->data['render_js']	= $this->load_scriptjs();
		$this->load->vars($this->data);
	}
	
	function app_view($page='home',$data=array()){
		$this->template->widget->title ='leave';
		$data['menu_items']	= $this->items['menu'];
		$data['user']		= $this->user_profile;
		if ($page !== 'home') {
			$data['navbar_top'] = $this->template->widget('navigation',$data);
		}
		$this->template->content->view('odoo/'.$page, $data);
		$this->template->publish();
	}

	function menu_leaves(){
		$this->items['menu'] = array();
	}
	function menu_leave_sample(){
		$this->items['menu'] = array(
			'dashboard' =>'hrd/index'
			,'report' => array(
					'leave details' => 'leave/report'
					,'leaves' => 'leave/all'
					,'leave by departement' => 'leave/by/dept'
				)
			);
	}
	function menu_leave_myleave(){
		$this->items['menu'] = array(
			'dashboard' =>'leaves/index'
			,'my leave' => array(
					'leaves summary ' => 'leaves/summary'
					,'leaves request' => 'leaves/leaves_request'
					,'allocation request' => 'leaves/allocation_request'
				)
			,'leave to approve' => array(
					'leaves' => 'leaves/leaves'
					,'leaves allocation' =>'leaves/leaves_allocations'
				)
			,'report' => array(
					'leaves detail' => 'leaves/detail'
					,'leaves' =>'leaves/leaves_report'
					,'leaves by departement' =>'leaves/bydepartement'
				)
			,'configuration' => 'leaves/configuration'
			);
	}
	function menu_product(){
		$this->items['menu'] = array(
			'product' =>'product/index'
			,'configuration' =>array(
					'product setting' => 'product/setting'
					,'product' => array(
						'product categories' =>'product/categories'
					)
					
				)
			);
	}
	function menu_employees(){
		$this->items['menu'] = array(
			'dashboard' =>'employees/index'
			,'departement' => 'employees/emp_departement');
	}

}
