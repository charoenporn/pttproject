<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function index()
	{
		//$this->load->view('welcome_message');
		$this->load->model('UserModel');
		$tmp = $this->UserModel->get_all_users();
//		var_dump($tmp);
		$data = array('navbar_name'=>'Users');
		$this->load->view('dashboard/top');
		$this->load->view('dashboard/navbar',$data);
		$this->load->view('dashboard/topcontent');
		//$this->load->view('users/user_form');

		$this->load->view('users/user_list');

		$this->load->view('dashboard/footcontent');
		$this->load->view('dashboard/footer');
	}
	public function new_user()
	{
		//$this->load->view('welcome_message');
		$this->load->model('UserModel');
		$tmp = $this->UserModel->get_all_users();
//		var_dump($tmp);
		$data = array('navbar_name'=>'Users');
		$this->load->view('dashboard/top');
		$this->load->view('dashboard/navbar',$data);
		$this->load->view('dashboard/topcontent');
		$this->load->view('users/user_form');
		$this->load->view('dashboard/footcontent');
		$this->load->view('dashboard/footer');
	}
}
