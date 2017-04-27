<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PropertyModel
 *
 * @author mh
 */
class PropertyModel extends Model {
   
    // returns user List 
    public function properties() {
        $database = Database::getInstance();
        $dbh = $database->getDBH();
                   
        $properties = $dbh->query("Select id, name, type, country, city, address, Sold_by, Number_Rooms, SqFt, Price, Amenities, finishing_type, floor_level, property_information, pictures FROM property")->fetchAll();

        return $properties;
    }

    public function create($data) {

        $database = Database::getInstance();
        $dbh = $database->getDBH();

        
        $stmt = $dbh->prepare("INSERT INTO property (name, type, country, city, address, Sold_by, Number_Rooms, SqFt, Price, Amenities, finishing_type, floor_level, property_information, pictures) VALUES (:name, :type, :country, :city, :address, :Sold_by, :Number_Rooms, :SqFt, :Price, :Amenities, :finishing_type, :floor_level, :property_information, :pictures)");
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':type', $data['type']);
        $stmt->bindParam(':country', $data['country']);
        $stmt->bindParam(':city', $data['city']);
        $stmt->bindParam(':address', $data['address']);
        $stmt->bindParam(':Sold_by', $data['Sold_by']);
        $stmt->bindParam(':Number_Rooms', $data['Number_Rooms']);
        $stmt->bindParam(':SqFt', $data['SqFt']);
        $stmt->bindParam(':Price', $data['Price']);
        $stmt->bindParam(':Amenities', $data['Amenities']);
        $stmt->bindParam(':finishing_type', $data['finishing_type']);
        $stmt->bindParam(':floor_level', $data['floor_level']);
        $stmt->bindParam(':property_information', $data['property_information']);
        $stmt->bindParam(':pictures', $data['pictures']);
        
        $stmt->execute();
    }

}

?>