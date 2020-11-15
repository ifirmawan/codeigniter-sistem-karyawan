<?php 

/**
* 
*/
class Employee_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	function get_company(){
		$sql ="select c.`company_name`, ep.`period_label`, p.`full_name`, epo.`job_title`
			from `company` c 
			INNER JOIN `emp_period` ep 
			INNER JOIN `person` p 
			INNER JOIN 	`emp_position` epo 
			INNER JOIN `employee` e on c.id_company = e.id_company 
			and ep.`id_period`=e.`id_period`and p.`id_person`=e.`id_person` 
			and epo.`id_position`=e.`id_position`";
    	return $this->db->query($sql)->result_array();
	}
}
