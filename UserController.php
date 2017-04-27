<?php
 
/**
 * Description of UserController
 *
 * @author mh
 */
class UserController extends Controller {
    
    // will list users 
    public function index(){
        $this->model->template = 'tpl/user/index.php';
        $users= $this->model->users();
        $data=['users'=>$users];
        $this->model->setData($data);
     
    }
    // show the form create a user 
    public  function create(){
     $this->model->template = 'tpl/user/create.php';    
        
    } 
    public function store(){
      /* check all user input files exit and not empty
            */
         
        $fullName  = $_POST['name'];
        $userName  = $_POST['username'];
        $userEmail = $_POST['email'];
        $password  = $_POST['password'];
        if (!empty($_POST['name'])&& !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password']))
        {
          
             $this->model->create([
             'name'=> $fullName,
             'username'=> $userName,
            'email'=>$userEmail, 
            'password'=>$password,  
                    ]); 
        
        $message = 'user have been created ';
        $type = 'success';
        $num = 202; 
        $url = '?controller=UserController&model=UserModel&view=UserView&action=index';
        
            
        }  else {
            
        $message = 'Please fill the form'; 
      $type = 'error'; 
      $url = '?controller=UserController&model=UserModel&view=UserView&action=create';
        $num = 202;    
            
            
            
       
        }
        flash($message, $type,'create_user');
        movePage($num, $url);
 
        }
        
       /* if(!$_POST['submit']){
            echo 'Please fill the form';  
            // redirct to home page 
            header('Location: index.php');
                   }  else {
                       // if it is ture we continue as normal 
                       mysql_query ("INSERT INTO `user`(`id`, `name`, `username`, `password`, `email`)
                               VALUES(NULL,'$fullName,'$userName','$userEmail','$password')") or die(mysql_error());  
                  echo 'User has been added';
                  // redict to home page 
                         header('Location: index.php');                        
                   }
                   
      
         
         }
        */
      
     
}
  ?>