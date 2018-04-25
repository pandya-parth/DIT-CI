<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	// Load Default helpers 
 	public function __construct()
    {
    	parent::__construct();
        $this->load->helper('url_helper');
        $this->load->helper('form');
		$this->load->model('users_model'); 
		$this->load->library('session');   
	}

	// Render Test page
	public function index()
	{
		$this->load->view('index.php');
	}

	// Save Test Record
	public function create()
	{
		$this->load->library('form_validation'); // Load Validation Library

		// Define validation rules
	    $this->form_validation->set_rules('name', 'Name', 'required');
	    $this->form_validation->set_rules('email', 'Email', 'required');
	    $this->form_validation->set_rules('phone', 'Phone', 'required');


	    if ($this->form_validation->run() === FALSE)
	    {
	        $this->load->view('index.php'); // Render view to display error
	    }
	    else
	    {
	    	// Insert new record to user
	    	try
	    	{
		        $this->users_model->set_users(); 
		        $this->session->set_flashdata('email_success', 'We really appreciate you giving us a moment of your time today. Our representative will get back to you shortly with a reply.');
				redirect('users/index');
	    	}
	    	catch(Exception $e)
	    	{
	    		$this->session->set_flashdata('error', 'Something went wrong, Please try after sometime.');
				redirect('users/index');
	    	}
	    }
	}
}
