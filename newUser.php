<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";
$myDB = "PaulsWebsite";
$newURL = "displayUsers.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $myDB);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully\n";
// $firstname = $_POST["firstname"];
$mySQLdata = "INSERT INTO userNames(firstname, lastname) VALUES ('{$_POST["firstname"]}', '{$_POST["lastname"]}')";

if($conn->query($mySQLdata) === TRUE){
	$conn->close();
    header('Location: '.$newURL);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}