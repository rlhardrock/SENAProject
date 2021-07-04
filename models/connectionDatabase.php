<?php

    $db_host="localhost";
    $db_ddbb="taller";
    $db_user="root";
    $db_pass="perrito";

    $connection = new mysqli ("$db_host","$db_user","$db_pass","$db_ddbb");
    /* $connection = new mysqli ("localhost","root","perrito","taller"); */

        if ($connection -> connect_errno){
            echo "Connection Error <-> Connectivity Failure ".$connection->connect_error;
            /* die ("Connection Error <-> Connectivity Failure ".$connection->connect_error); */
        }else{
            return $connection;
            echo "Successful Connection";
        }

        echo $connection->host_info . "\n";  //optional

        $connection->close();
        /* mysqli_close($connection); */

?>