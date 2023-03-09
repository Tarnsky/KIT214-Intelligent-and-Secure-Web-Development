<?php
session_start();

$username = $_SESSION["username"];
$fileAddress = $username . "Balance.txt";
$fileBalance = $username . "Address.txt"; 
?>
<html>
<body>
Name: <?php echo file_get_contents($username . "User.txt"); ?><br>
Address: <?php echo file_get_contents($fileAddress); ?><br>
Balance: <?php echo file_get_contents($fileBalance); ?><br>


<div id="logout">
    <button onclick="location.href='https://131.217.174.90/Assignment1/bye.php'">Logout</button>
</div>

</body>
</html> 