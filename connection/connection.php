<?php
    
    //define the connection as a static variable, to avoid connecting mare than once
    static $connection;
    
    //Try and connect to the database, if a connection has not established yet
    if(!isset($connection)) {
        //Load configuration as an array.
        $config = parse_ini_file('config.ini');
        $connection = new mysqli("localhost", $config["user"], $config["password"], $config["dbname"]);
    }
    
    //If connection was not succesful, handle the error
    if ($connection->connect_error){
        echo 'Connection Failed:'. mysqli_connect_error();
        exit;
    }


