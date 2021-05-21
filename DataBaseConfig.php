<?php

class DataBaseConfig
{
    public static function connect()
    {
        define("servername", "localhost");
        define("username", "root");
        define("password", "");
        define("dbname", "food_to_your_heart");
        try {
            $con = new PDO("mysql:host=localhost; dbname=food_to_your_heart", username, password);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $con;
    }


}

