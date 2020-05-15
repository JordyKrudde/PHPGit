<?php

    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", dirname(PRIVATE_PATH));
    define("PULBIC_PATH", PRIVATE_PATH . '/public');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');

    require_once("database.php");
   
    $db = db_connect();
    
    session_start();
?>