<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$quali=$_POST['father'];
$area=$_POST['area'];
$gender=$_POST['gender'];

$contact=$_POST['contact'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$confirm=$_POST['confirm'];
$secque=$_POST['secque'];
$secans=$_POST['secans'];
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
//this code is to check whether user name already exist or not!!
$query="select * from student where username='$uname'";


if($result = mysqli_query($conn, $query)) {
$i=0;
while($row=mysqli_fetch_row($result))
{
$i++;
}

if($i>0){
	echo "<script>
	alert('username already taken');
	window.location.href='login.html';
	</script>";
	// echo("username already taken");

}
else{


$query1="insert into student values('$fname','$lname','$quali','$area','$gender','$contact','$uname','$pass','$confirm','$secque','$secans',null)";
$result = mysqli_query($conn, $query1);
}
//header("location:students.html");
?>
<script type="text/javascript">
	alert("data inserted successfully!!");
	window.location.href="login.html";


</script>
<?php

}

?>
