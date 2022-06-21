<?php
class admin_login extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');
	}


	public function index(){
		$this->load->view('admin_login');
	}

	public function login(){
		$this->form_validation->set_rules('un','Username','required');
		$this->form_validation->set_rules('pw','Password','required');
		if($this->form_validation->run())
		{
			$un=$this->input->post('un');
			$pw=$this->input->post('pw');
			$this->load->model('admin_login1');
			$data=$this->admin_login1->login($un,$pw);
			if($data){
				$this->session->set_userdata('uid',$un);
				return redirect('admin_home');
			}
			else{
				echo "Sorry, Incorrect Username or Password";
			}
		}
		else{
			$this->load->view('admin_login');
		}
	}




}




?>