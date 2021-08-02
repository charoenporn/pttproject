<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		//$this->load->view('welcome_message');
		//$this->load->model('UserModel');
		//$tmp = $this->UserModel->get_all_users();
		//var_dump($tmp);
    }
    
    public function check_login(){
        $username = $_POST["username"];
        $password = $_POST["password"];

    }
}
