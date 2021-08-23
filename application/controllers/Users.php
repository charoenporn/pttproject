<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function index()
	{
		// if(!isset($_SESSION['logged_in'])){
		// 	$this->session->set_flashdata('message_error', 'กรุณาเข้าสู่ระบบ');
		// 	redirect('/login/');
		// }

		// if($_SESSION['autority'] != '1'){
		// 	$this->session->set_flashdata('message_error', 'คุณไม่มีสิทธิ์ใช้งาน');
		// 	redirect('/welcome/');
		// }

		$this->checklogin();

		$this->load->model('UserModel');
		$tmp = $this->UserModel->get_all_users();
		$data = array('navbar_name'=>'Users');
		$this->load->view('dashboard/top');
		$this->load->view('dashboard/navbar',$data);
		$this->load->view('dashboard/topcontent');
		$page_data['userList'] = $tmp;
		$this->load->view('users/user_list',$page_data);
		$this->load->view('dashboard/footcontent');
		$this->load->view('dashboard/footer');
	}
	public function new_user()
	{
		$this->checklogin();
		$this->load->model('UserModel');
		$tmp = $this->UserModel->get_all_users();
		$data = array('navbar_name'=>'Users');
		$this->load->view('dashboard/top');
		$this->load->view('dashboard/navbar',$data);
		$this->load->view('dashboard/topcontent');
		$this->load->view('users/user_form');
		$this->load->view('dashboard/footcontent');
		$this->load->view('dashboard/footer');
	}

	public function new_user_add()
	{
		$this->checklogin();
		$username 	= $_POST["username"];
		$email 		= $_POST["email"];
		$fname 		= $_POST["fname"];
		$lname 		= $_POST["lname"];
		$phone 		= $_POST["phone"];
		$password 	= $_POST["password"];

		$data = array(
			"username"=>$username, 
			"email"=>$email,
			"fname"=>$fname,
			"lname"=>$lname,
			"phone"=>$phone,
			"password"=>$password
		);

		$this->load->model('UserModel');
		$tmp = $this->UserModel->insert_users($data);


		var_dump ($data);
	}


	public function edit_user()
	{
		$this->checklogin();

		$this->load->model('UserModel');
		$tmp = $this->UserModel->get_all_users();
		$data = array('navbar_name'=>'Users');
		$this->load->view('dashboard/top');
		$this->load->view('dashboard/navbar',$data);
		$this->load->view('dashboard/topcontent');

		$this->load->view('users/user_edit_form');
		$this->load->view('dashboard/footcontent');
		$this->load->view('dashboard/footer');
	}

	private function checklogin(){
		if(!isset($_SESSION['logged_in'])){
			$this->session->set_flashdata('message_error', 'กรุณาเข้าสู่ระบบ');
			redirect('/login/');
		}

		if($_SESSION['autority'] != '1'){
			$this->session->set_flashdata('message_error', 'คุณไม่มีสิทธิ์ใช้งาน');
			redirect('/welcome/');
		}
	}
}
