<?php

$u = $_GET['username'];
$p = $_GET['password'];

$servername = getenv('IP');
$username = getenv('C9_USER');
$password = "";
$database = "c9";
$dbport = 3306;

// Create connection
$db = new mysqli($servername, $username, $password, $database, $dbport);

// Check connection
if ($db->connect_error) {
	die("Connection failed: " . $db->connect_error);
} 

$sql = "SELECT * FROM users WHERE username='" . $u . "' AND password='" . $p . "'";

$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "You're in!";
} else {
    echo "Nope. \nQuery: " . $sql . "";
}

mysqli_close($db);

?>