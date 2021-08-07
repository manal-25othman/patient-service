<?php 
session_start();

session_unset();
session_destroy();

header("Location:/patientservicee/patientservice/Login-System-hosptail/index.php");
?>