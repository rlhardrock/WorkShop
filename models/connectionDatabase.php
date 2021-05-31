<?php

    function Connect(){
        $connection = new mysqli ("localhost","root","perrito","taller");

        if ($connection -> connect_errno){
            echo "Connection Error <-> Connectivity Failure ".$connection->connect_error;
        }else{
            return $connection;
            echo "Successful Connection";
        }

        echo $connection->host_info . "\n";  //optional
    }
