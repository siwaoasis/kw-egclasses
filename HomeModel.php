<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeModel
 *
 * @author mh
 */
class HomeModel extends Model{
    //put your code here
    
      public function __construct(){
        
        $this->template = "tpl/home.php";
    }
}
