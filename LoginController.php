<?php

 
class  LoginController extends Controller {
    //put your code here
    
    public function getLogin(){
        
        return; 
        
    } 
    
    public function postLogin(){
        
   $username =  $_POST['username'];
   $password =  $_POST['password'];
   
    $userChecker = $this->model->userChecker($username,$password);
     
    if($userChecker === '1'){
       $message = 'You have Logined in Successfully ';
        $type = 'success';
        $num = 202; 
        $url = '?controller=HomeController&model=HomeModel&view=HomeView&action=index';
        
    }  else {
      $message = 'User name or Password is not correct'; 
      $type = 'error';          
    }
    
    flash($message, $type,'login');
    movePage($num, $url);
    }
    
    
    
}



?>