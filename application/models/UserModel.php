<?php
class UserModel extends CI_Model {
    public function get_all_users()
    {
            $query = $this->db->get('users');
            return $query->result();
    }

    public function check_username_password($username,$password)
    {
            $query = $this->db->get('users');
            $user = $query->result();
            if($user.sizeof()==1){

            }

    }

}