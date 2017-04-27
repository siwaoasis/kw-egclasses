<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PropertyController
 *
 * @author mh
 */
class PropertyController extends Controller {

    // will list properties 
    public function index() {
        $this->model->template = 'tpl/property/property.php';
        $users = $this->model->properties();
        $data = ['properties' => $properties];
        $this->model->setData($data);
    }

    // show the form create a user 
    public function create() {
        $this->model->template = 'tpl/property/property.php';
    }

    public function store() {
        /* check all user input files exit and not empty
         */

        $name = $_POST['name'];
        $type = $_POST['type'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $Sold_by = $_POST['Sold_by'];
        $Number_Rooms = $_POST['Number_Rooms'];
        $SqFt = $_POST['SqFt'];
        $Price = $_POST['Price'];
        $Amenities = $_POST['Amenities'];
        $finishing_type = $_POST['finishing_type'];
        $floor_level = $_POST['floor_level'];
        $property_information = $_POST['property_informatio'];
        $pictures = $_POST['pictures'];




        if (!empty($_POST['name']) && !empty($_POST['type']) && !empty($_POST['city']) && !empty($_POST['address']) && !empty($_POST['Sold_by']) && !empty($_POST['Number_Rooms']) && !empty($_POST['SqFt']) && !empty($_POST['Price']) && !empty($_POST['Amenities']) && !empty($_POST['finishing_type']) && !empty($_POST['floor_level']) && !empty($_POST['property_informatio']) && !empty($_POST['pictures'])
        ) {

            $this->model->property([
                
                
                'name' => $name,
               'type' => $type,
                'address' => $address,
                'Sold_by' => $Sold_by,
                'Number_Rooms' => $Sold_by, 
                'Number_Rooms' => $Number_Rooms,
                'SqFt' => $SqFt, 
                'Price' => $Price, 
                'Amenities' => $Amenities, 
                'finishing_type' => $finishing_type, 
                'floor_level' => $floor_level,
                'property_informatio' => $property_information, 
                'pictures' => $pictures
                
                
            ]);

            $message = 'Property has been added ';
            $type = 'success';
            $num = 202;
            $url = '?controller=PropertyController&model=PropertyModel&view=PropertyView&action=property';
        } else {

            $message = 'Please fill the form';
            $type = 'error';
            $url = '?controller=PropertyController&model=PropertyModel&view=PropertyView&action=property';
            $num = 202;
        }
        flash($message, $type, 'create_property');
        movePage($num, $url);
    }

     



      
}

?>