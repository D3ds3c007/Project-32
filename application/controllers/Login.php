<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
        parent::__construct();
    }
	
    public function index()
	{
		$this->load->view('page/login');
	}	

	public function login()
	{
		$mail = $this->input->post("email");
		$pass = $this->input->post("mdp");

		$this->load->model('Model');
		if($this->Model->checkLogin($mail,$pass))
		{
			if($this->session->userdata('typeUser') == 0){
				redirect('admin/index');
			}else{
				redirect('client/index');
			}
			// $this->session->set_userdata('mail', $mail);
		}else{
			redirect('login/index');
		}
	}
	public function loadinscri()
	{
		$this->load->view('page/inscription');

	}
	public function inscription()
	{

		$this->load->view('page/inscription');
	}

	public function validate()
	{
		$name = $this->input->post("name");
		
		$mail = $this->input->post("email");
		$pass = $this->input->post("password");
		
		if($this->Model->checkInscri($mail))
		{
			$this->Model->insertUser($name, $mail, $pass);
			redirect('login/index');
		}
		else{
			echo "tsy mety";
		}
	}

	
}
