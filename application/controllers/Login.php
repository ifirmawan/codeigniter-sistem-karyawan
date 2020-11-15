<?php 

class Login extends Portal{

	function __construct(){
		parent::__construct();
		/**
		* untuk model dan library usahakan untuk di autoload
		**/
	}

	function index(){
		$data['errors_log']	= $this->session->userdata('errors_log');
		$this->login_view($data);
	}

	function submit(){
		/**
		* $_POST mengambil semua bidang pada form. kalau dijs form serialize. isinya array() 
		* 
		**/
		$data = $_POST;
		$this->validation->set_data($data); // register
    	$this->validation->required(array('user_name','user_password'), 'Username dan Password tidak boleh kosong !');

    	if ($this->validation->is_valid()) {
    		if ($user_data = $this->user->verify($data['user_name'],$data['user_password'])) {
    			$data  = (array)$user_data;    			
    			if (isset($data['user_password'])) {
    				unset($data['user_password']);
    			}
    			$this->session->set_userdata('logged_in',$data);
    			redirect('hrd','refresh');
    		}else{
    			$this->session->set_flashdata('errors_log','Username dan password salah !');		
    		}
    	}else{
    		$this->session->set_flashdata('errors_log',$this->validation->get_error_message());	
    	}
    	$this->index();
	}

    public function doforget()
    {
    
    $this->load->helper('url');
    $email= $_POST['email'];
    $q = $this->db->query("select * from user where email='" . $email . "'");
        if ($q->num_rows > 0) {
            $r = $q->result();
            $user=$r[0];
      $this->resetpassword($user);
      $info= "Password has been reset and has been sent to email id: ". $email;
      redirect('login');
        }
    $error= "The email id you entered not found on our database ";
    redirect('login');
    
    } 
  	

}