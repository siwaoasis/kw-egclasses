
<?php
class Controller
{
    protected $model;
    

    public function __construct($model,$action) {
        $this->model = $model;
        $this->$action();
    }
    
     
    
    
}
?>
 