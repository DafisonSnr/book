<?php

class login{
    public $user;

    public function set_user($username){
        $this->user = $username;
    }
    public function get_user(){
        if(empty($this->user)){
            $user_er = "No data";
        }else{
            return $this->user;
        }
        
    }
}