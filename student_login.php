
<?php
//session_start();
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
$sql = "select username,password from student where username='$user' AND password='$pass'";

if ($result = mysqli_query($conn, $sql)) {
$i=0;
 while ($row = mysqli_fetch_row($result)) {
   
   $i++;
      	
 
}
if($i>0){

	echo"<script>
		alert('login succeesfully!!!');

		window.location.href='stu_successfull.php'
				</script>";
	//header('location:llogin.php');
}

else{
	echo"<script>
		alert('login failed');

		window.location.href='student.html'
				</script>";
	//header('location:lecturer.html');
}


}






?>


