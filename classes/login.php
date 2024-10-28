<?php

class Login
{
    private $error = "";

    public function evaluate($data)
    {
        $user_name = addslashes($data['user_name']);
        $password = addslashes($data['password']);  


        $query = "select * from users where user_name = '$user_name' limit 1";

        $DB = new Database();
        $result = $DB->read($query);

        if($result)
        {
            $row = $result[0];

            if($password == $row['password'])
            {
                //create session data
                $_SESSION['bigkas_userid'] = $row['userid'];
            }else
            {
                $this->error .= "Incorrect Username or Password!<br>";
            }
        }else
        {
            $this->error .= "Incorrect Username or Password!<br>";
        }
            return $this->error;
        
    }
    public function check_login($id)
    {
        $query = "select userid from users where userid = '$id' limit 1";

        $DB = new Database();
        $result = $DB->read($query);

        if($result)
        {
            return true;
        }

        return false;
    }

}