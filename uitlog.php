<?php
session_start(); //zodat ie aan is
session_destroy(); //zodat ie uit gaat
header("location: index.php"); //terug sturen naar de hoofdpagina
exit();
?>