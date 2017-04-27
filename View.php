 
<?php
class View
{
    protected $model;
    protected $controller;

    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }
	
    public function output(){
      $public = ROOTPATH.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR;
      $data =  $this->model->getData();
      $data['template'] = $public.$this->model->template;
      extract($data);
       
        require_once($public.'tpl/master.php');
        
    }
    // return the data 
    //  
}
 ?>


 