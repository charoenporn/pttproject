<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
		//$this->load->model('UserModel');
		//$tmp = $this->UserModel->get_all_users();
		//var_dump($tmp);
    }
    
    public function check_login(){
        $username = $_POST["uname"];
		$password = $_POST["psw"];
		$this->load->model('UserModel');
		$tmp = $this->UserModel->check_username_password($username,$password);
		if($tmp){
			redirect('/users/');
		}else{
			$this->session->set_flashdata('message_error', 'กรุณาเข้าสู่ระบบใหม่อีกครั้ง');
			redirect('/login/');
		}

	}
	
	public function logout(){
		$array_items = array('userID', 'username','fname','lname','email','phone','autority','logged_in');
		$this->session->unset_userdata($array_items);
	}
}
