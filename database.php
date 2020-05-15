<?php

    require_once("DB_credentials.php");

    function db_connect(){
        $connention = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        return $connention; 
    }

    function db_disconnect(){
        if(isset($connention)){
            mysqli_close($connention);
        }
    }
?>