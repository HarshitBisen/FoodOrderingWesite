<?php


class home extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('home');
	}
	public function open_about(){
		$this->load->view('contact');
	}
	public function open_home(){
		$this->load->view('home');
	}
	public function open_delicacies(){
		$this->load->view('delicacies');
	}
}