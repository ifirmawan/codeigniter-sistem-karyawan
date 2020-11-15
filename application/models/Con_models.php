<?php
class Contacts extends CI_Model{
    function index()
    {
        $query=$this->db->query("SELECT c.company_name, ep.period_label, p.full_name, epo.job_title
     FROM company c INNER JOIN emp_period ep INNER JOIN person p INNER JOIN em
       p_position epo INNER JOIN employee e 
        on c.id_company=e.id_company and
        ep.id_period=e.id_period and
        p.id_person=e.id_person and
        epo.id_position=e.id_position;");
        return $query->result();
    }
}