<?php

$user=$_POST['user'];
$pass=$_POST['pass'];

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

    
	$sql = "select * from admin where username='$user' AND password='$pass'";

if ($result = mysqli_query($conn, $sql)) {
$i=0;
  while ($row = mysqli_fetch_row($result)) {
   $i++;
 
}
if($i>0){

	echo"<script>
		alert('login succeesfully!!!');

		window.location.href='admin_successfull.php'
				</script>";
	
}

else{
	echo"<script>
		alert('login failed');

		window.location.href='adminlogin.html'
				</script>";
}
    
}


mysqli_close($conn);
?>