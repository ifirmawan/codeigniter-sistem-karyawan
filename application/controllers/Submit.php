<?php
/**
* 
*/
class Submit extends Apps
{
	
	function __construct()
	{
		parent::__construct();
	}

	private function resetpassword($user)
	{
		date_default_timezone_set('GMT');
		$this->load->helper('string');
		$password= random_string('alnum', 16);
		$this->db->where('id', $user->id);
		$this->db->update('user',array('password'=>MD5($password)));
		$this->load->library('email');
		$this->email->from('nuriyatusamin12@gmail.com', 'N Amin');
		$this->email->to($user->email); 	
		$this->email->subject('Password reset');
		$this->email->message('You have requested the new password, Here is you new password:'. $password);	
		$this->email->send();
	} 

	function new()
	{
		$this->validation->set_data($_POST);
		$this->validation->required(array('name', 'address', 'contact_email', 'contact_handphone'));
		if ($this->validation->is_valid()){
			if ($_POST['']) {
				
			}
		}
	}

	
	function edit_identitas_pegawai(){
		$this->validation->set_data($_POST);
		$this->validation->required(array('nik', 'ttl', 'alamat', 'lamakerja'));
		if ($this->validation->is_valid()){
			if ($_POST['']) {
				# code...
			}
		}
	}

	function ubah_pengalaman_kerja(){
		$this->validation->set_data($_POST);
		$this->validation->required(array('perusahaan1', 'perusahaan2', 'perusahaan3', 'perusahaan4','perusahaan5'));
		if ($this->validation->is_valid()){
			if ($_POST['']) {
				# code...
			}
		}
	}

	function ubah_riwayat_pendidikan(){
		$this->validation->set_data($_POST);
		$this->validation->required(array('sd', 'smp', 'sma', 'kampus'));
		if ($this->validation->is_valid()){
			if ($_POST['']) {
				# code...
			}
		}
	}

	
}
