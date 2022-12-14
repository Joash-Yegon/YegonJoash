<?php
include 'connection.php';
$servername = "localhost";
$username = 'root';
$password = '';
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (firstName,LastName,Email,Number,Gender,Password)
VALUES ('$firstName', '$LastName', '$Email','$Number','$Gender','$Password');";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>