<?php

namespace classes;

use PDOException;
use PDO;

class DbConnector{

    protected function connect(){
        try {
            $dbuser = "Aysha";
            $dbpass = "aysha";
            $con = new PDO ('mysql:host=localhost; dbname=quizzify', $dbuser, $dbpass);
            return $con;
        } catch (PDOException $exc) {
            print "Error: ". $exc->getMessage() . "<br>";
            die();
        }
    }
}