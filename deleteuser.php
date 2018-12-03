<?php
// Read from the formulary (login.html)
//
$servername = "localhost:3306";
$username = "root";
$password = "root";
//$password = "";
$db = "web";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()); //se acaba
}
//echo "Connected successfully";

$query = "SELECT name FROM users";
//echo $query;
$result = mysqli_query($conn, $query);

$user = $_POST['user'];
//deletear el users
$query = "DELETE FROM users WHERE name = '$user'";
//echo $query;
$result = mysqli_query($conn, $query);

header ('Location: '."users_admin.php");


































 ?>
