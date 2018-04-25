<?php
class Users_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    // Store users data
	public function set_users()
	{
	    $this->load->helper('url');
	    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    	$password = substr( str_shuffle( $chars ), 0, 8 );
	    $data = array(
	        'name' => $this->input->post('name'),
	        'email' => $this->input->post('email'),
	        'phone' => $this->input->post('phone'),
	        'password' => md5($password)
	    );
		if($this->db->insert('users', $data))
		{
			// Send email to users
			$data['password'] = $password;
			$this->load->library('email');
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.gmail.com';
			$config['smtp_port'] = '465';
			$config['smtp_timeout'] = '7';
			$config['smtp_user'] = 'nicolecross1579@gmail.com';
			$config['smtp_pass'] = 'krisha1234';
			$config['charset'] = 'utf-8';
			$config['newline'] = "\r\n";
			$config['mailtype']= 'html';
			$config['validation'] = TRUE; 
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");
	        $this->email->from('noreply@ditcanada.com', 'Digital Ink Technologies');
	    	$this->email->to($this->input->post('email'));
			$this->email->subject('Thank you for submitting your details');
	    	$body = $this->load->view('emails/welcome.php',$data,TRUE);
			$this->email->message($body);   
	    	$this->email->send();
	    	return true;
		}
		else
		{
		    return false;
		}
	}
}