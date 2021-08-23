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
            $users = $query->result();
            if(count($users)==1){
                //var_dump($users);
                $user = $users[0];
                if($user->password == $password){
                        $user_data["userID"] = $user->userID;
                        $user_data["username"] = $user->username;
                        $user_data["fname"] = $user->fname;
                        $user_data["lname"] = $user->lname;
                        $user_data["email"] = $user->email;
                        $user_data["phone"] = $user->phone;
                        $user_data["autority"] = $user->autority;
                        $user_data["logged_in"] = TRUE;
                        $this->session->set_userdata($user_data);
                        return (true);
                }else{
                        return (false);
                }
                
            }else{
                return (false);
            }

    }

    public function insert_users($user)
    {
        if(getuser_by_username($user["username"])==FALSE){
                $sql = "";
                $query = $this->db->query($sql);
        }else{

        }

    }

    public function getuser_by_username($username)
    {
        $sql = "";
        $query = $this->db->query($sql);

        return (FALSE);
    }

}