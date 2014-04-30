<?php

/* Definições */
// $senha = "ComplexoAlema0@2013";

$host     = 'localhost';
$user 	  = 'root';
$pass 	  = 'root';
$database = 'albumdacopa';

if(isset($_SESSION['email'])) {
	$logged_in = false;
}
else {
	$logged_in = true;
}

?>