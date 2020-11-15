<?php 

class Login_model extends CI_Model{	
	
	function cek_login($table,$where){		
		/**
		* nama fungsi cek_login spesifik
		* tapi get_where($table,$where) umum, bisa diisi nama tabel aja aja, dan kondisi kolom apa aja.
		* Jadi solusinya, ganti nama fungsinya aja.
		* ini tidak salah, tapi jangan dulu dipakai
		**/
		return $this->db->get_where($table,$where); 
	}

     
    public function sendpassword($data)
    {
        $email = $data['email'];
        $query1=$this->db->query("SELECT *  from user where email = '".$email."' ");
        $row=$query1->result_array();
        if ($query1->num_rows()>0)
      
        {
        
        $passwordplain = "";
        $passwordplain  = rand(999999999,9999999999);
        $newpass['user_password'] = sha1($passwordplain);
        $this->db->where('email', $email);
        $this->db->update('user', $newpass); 
        $mail_message='Dear '.$row[0]['first_name'].','. "\r\n";
        $mail_message.='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
        $mail_message.='<br>Please Update your password.';
        $mail_message.='<br>Thanks & Regards';
        $mail_message.='<br>Your company name';        
        date_default_timezone_set('Etc/UTC');
        require FCPATH.'assets/PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPSecure = "tls"; 
        $mail->Debugoutput = 'html';
        $mail->Host = "smptp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPAuth = true;   
        $mail->Username = "nuriyatusamin12@gmail.com";    
        $mail->Password = "nuriyatusamin12";
        $mail->setFrom('admin@site', 'admin');
        $mail->IsHTML(true);
        $mail->addAddress($email);
        $mail->Subject = 'OTP from company';
        $mail->Body    = $mail_message;
        $mail->AltBody = $mail_message;
            if (!$mail->send()) {
                $this->session->set_flashdata('msg','Failed to send password, please try again!');
            } 
            else {
                $this->session->set_flashdata('msg','Password sent to your email!');
            }
                redirect('login','refresh');        
        }
        else
        {  
            $this->session->set_flashdata('msg','Email not found try again!');
            redirect('login','refresh');
        }
}

}