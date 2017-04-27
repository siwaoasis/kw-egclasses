<?php

/*
 * kweg_pr
 * @ auther Mohamed Hemeda 
 */

class Database {
 
 
    const DSN = 'mysql:dbname=kweg_pr;host=127.0.0.1';
    const USER = 'root';
    const PASSWORD ='';

    private $dbh;

    public function getDBH() {
        return $this->dbh;
    }

// to get the object one time and work with it withen the system 
    private static $instance;

    public static function getInstance() {
        if (null === static::$instance) {
            static::$instance = new static();
        } return static::$instance;
    }

// to make sure the only one object created 
    protected function __construct() {

        try {
            $this->dbh = new PDO(self::DSN, self::USER, self::PASSWORD);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

// to make sure the object will not copied 
    private function __clone() {
        
    }

    // to privent oping the object 
    private function __wakeup() {
        
    }

}
