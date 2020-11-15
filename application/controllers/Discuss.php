<?php
/**
* 
*/
class Discuss extends Apps
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->vars($this->user_profile);
	}
	function index()
	{
		echo "hello";
	}

	function channel_action(){

		$data['nav_model'] = 'nav_discuss_channel_action';
		$this->app_view('discuss-channel-action',$data);
	}
	function channel(){
		$data['nav_model'] = 'nav_discuss_channel';
		$this->app_view('discuss-channel',$data);
	}
	function channel_list(){
		$data['nav_model'] = 'nav_discuss_channel_list';
		$this->app_view('discuss-channel-list',$data);
	}
	function channel_edit(){
		$data['nav_model'] = 'nav_discuss_channel_edit';
		$this->app_view('discuss-channel-edit',$data);
	}
	function filter(){
		$data['nav_model'] = 'nav_discuss_filter';
		$this->app_view('discuss-filter',$data);
	}
	function chat(){
		$this->app_view('discuss-chat');
	}
	
}