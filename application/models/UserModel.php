<?php
class UserModel extends CI_Model {
    public function get_all_users()
    {
            //$query = $this->db->get('users'); // SELECT * FROM users

            $query = $this->db->query("SELECT * FROM users WHERE activeflag = 1");
            return $query->result();
    }

    public function check_username_password($username,$password)
    {
            //$query = $this->db->get('users');
            $sql = "SELECT * FROM users WHERE username='".$username."' and password='".$password."' and activeflag = 1";
            //echo $sql;
            //die();
            $query = $this->db->query($sql);
            $user = $query->result();
            if($user.sizeof()==1){

            }

    }

}