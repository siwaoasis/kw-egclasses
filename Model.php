<?php
class Model
{
    private $data=[];
    public $template;
    
    

    public function __construct(){
        
        $this->template = "tpl/template.php";
        
        
    }
    
    public function getData(){
        return $this->data;
    } 
    
     public function setData($data){
        $this->data = $data;
    } 
}

?>
 