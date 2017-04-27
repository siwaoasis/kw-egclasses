<?php


class LoginModel extends Model{
    
    public function __construct(){
        
        $this->template = "tpl/login.php";
    }
    //  get receives user name and password and returns boolen 
    public function userChecker($username,$password){
        
    $database = Database::getInstance();
    $dbh = $database->getDBH();
    //`id`, `name`, `username`, `password`, `email`SELECT * FROM `users` WHERE 1
    $count = $dbh->query("SELECT COUNT(*) as c FROM user WHERE username = '{$username}' AND password ='{$password}'")->fetchColumn();
   
    return $count;
   
            
        }
        
        
    } 
    

?>