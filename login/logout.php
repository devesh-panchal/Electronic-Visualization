<?php
session_start(); 

unset($_SESSION["username"]);
session_destroy();
header("Location:http://localhost:8085/ev/loginindex.php");
?>