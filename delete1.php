<?php

$name=$_GET['hiddenId'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "e-notes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "DELETE FROM student WHERE id='$name'";

$result = mysqli_query($conn, $sql);
header("location:studentDetails1.php");

?>