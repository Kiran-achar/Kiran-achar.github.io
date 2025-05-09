<?php

$a=$_POST['a'];
$b=$_POST['b'];
///echo"$igd";
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
$sql = "update admin set username='$a',password='$b'";

$result = mysqli_query($conn, $sql);
//header("location:studentDetails1.php");


?>

<script type="text/javascript">
	alert("Username And Password updated successfully");
window.location.href="adminlogin.html";
</script>