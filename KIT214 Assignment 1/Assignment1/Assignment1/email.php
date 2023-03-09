<?php
session_start();
	$token = str_shuffle("token1378263token");
	$file =  $_SESSION["username"] . 'token.txt';
	// Write the contents back to the file
	file_put_contents($file, $token);
	$url= "http://131.217.174.90/Assignment1/verifyToken.php?&username=" . $_SESSION["username"] . "&token=" . $token;
	$sub= "Banklogin";
	$email= "ted.krimmer@gmail.com";
	

	echo '<pre>';
	$stri= 'echo "' . $url . '" | mail -s "' . $sub . '" ' . $email;

	$last_line = system($stri, $retval);

	// Printing additional info
	echo '</pre> <hr />Last line of the output: ' . $last_line . ' <hr 
	/>Return value: ' . $retval; 

	echo "<br>An email has been sent. Please check inbox (and spam)";
	
?>