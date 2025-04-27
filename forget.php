<?php
$contact=$_POST['phone'];
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
$query="select * from student where contact='$contact' AND sec_question='$secque' AND sec_answer='$secans' ";


if($result = mysqli_query($conn, $query)) {
$i=0;
while($row=mysqli_fetch_row($result))
{
$i++;
$user=$row[6];
$pass=$row[7];
}

if($i>0)
{
	
		
		echo"<script>";
		echo"alert('Your username ='+'$user'+' And Password='+'$pass');";
		echo"window.location.href='student.html'";
		echo"</script>";

}
else
{
	?>
		<script type="text/javascript">
			alert("please enter details correctly");
			window.location.href="forget.html";
		</script>
		<?php
}

}

?>
