<?php
session_start();
//Set session variables
$_SESSION["username"] = $_POST["username"];
$_SESSION["password"] = $_POST["password"];

$username = $_SESSION["username"];
$fileUser = $username . "User.txt";
$filePassword = $username . "Password.txt"; 

if (file_get_contents($fileUser) === $_SESSION["username"] and file_get_contents($filePassword) === $_SESSION["password"]){

header('Location: https://131.217.174.90/Assignment1/email.php');
}

else {
header('Location: https://131.217.174.90/Assignment1/login.php');
}

?>

