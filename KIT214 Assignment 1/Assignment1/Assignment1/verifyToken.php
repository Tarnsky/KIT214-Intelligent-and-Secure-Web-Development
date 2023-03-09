<?php
session_start();
$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
parse_str($url);
echo $username;
echo $token;

$fileToken = $username . "token.txt";


if (file_get_contents($fileToken) === $token){
unlink($fileToken);
header('Location: https://131.217.174.90/Assignment1/display.php');
}
else {
unlink($fileToken);
header('Location: https://131.217.174.90/Assignment1/login.php');
}

?>