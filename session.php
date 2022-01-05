<?php 
session_start();
$valeur = 4;

$_SESSION['variable'] = $valeur ;

if(isset($_SESSION['variable']))
echo 'La variable "variable" existe !';




?>