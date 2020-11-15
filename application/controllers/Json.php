<?php

/**
* 
*/
class Json extends Datatables
{
	
	function __construct()
	{
		parent::__construct();
	}
	function user()
	{
		$data['draw'] 				= 1;
		$data['recordsTotal'] 		= 3;
		$data['recordsFiltered'] 	= 3;
		$data['data']				= array();
		if ($query = $this->db->get('user')->result_array()) {
			$data['data'] = $this->change_keys_with_numb($query);
		}
		$this->export($data);
	}
	

}