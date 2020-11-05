<?php
$serverName="localhost";
$userName="root";
$userPassword="";
$dbName="seoldnew";

$conn = new PDO("mysql:host=$serverName;dbname=$dbName",$userName,$userPassword);
?>