<?php

/* Description of UserModel
 *
 * @author mh
 */

class UserModel extends Model {

    // returns user List 
    public function users() {
        $database = Database::getInstance();
        $dbh = $database->getDBH();
        //`id`, `name`, `username`, `password`, `email`SELECT * FROM `users` WHERE 1
        $users = $dbh->query("Select id, name, username, email FROM user")->fetchAll();

        return $users;
    }

    public function create($data) {

        $database = Database::getInstance();
        $dbh = $database->getDBH();

        
        $stmt = $dbh->prepare("INSERT INTO user (name, username, password, email) VALUES (:name, :username,:password, :email)");
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':username', $data['username']);
        $stmt->bindParam(':password', $data['password']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->execute();
    }

}

?>