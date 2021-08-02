<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function index()
	{
		$this->load->model('UserModel');
		$tmp = $this->UserModel->get_all_users();
		//$tmp2 = $this->UserModel->check_username_password('111','222');
		
//		var_dump($tmp);

		$data = array('navbar_name'=>'Users');
		$this->load->view('dashboard/top');
		$this->load->view('dashboard/navbar',$data);
		$this->load->view('dashboard/topcontent');
		//$this->load->view('users/user_form');
		//$page_data = array('userList'=>$tmp,'datatml2'=>$tmp2);
		$page_data['userList'] = $tmp;
		//$page_data['datatmp2'] = $tmp2;

		$this->load->view('users/user_list',$page_data);

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

	public function edit_user()
	{
		//$this->load->view('welcome_message');
		$this->load->model('UserModel');
		$tmp = $this->UserModel->get_all_users();
//		var_dump($tmp);
		$data = array('navbar_name'=>'Users');
		$this->load->view('dashboard/top');
		$this->load->view('dashboard/navbar',$data);
		$this->load->view('dashboard/topcontent');

		$this->load->view('users/user_edit_form');

		$this->load->view('dashboard/footcontent');
		$this->load->view('dashboard/footer');
	}
}
