<?php
include './partials/function.php';

session_start();

$_SESSION['password']= passwordGenerator($_GET['length']) ;

header ('Location: ./result.php')

?>

