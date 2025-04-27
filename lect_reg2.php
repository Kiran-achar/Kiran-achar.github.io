<?php



$fname=$_POST['fname'];

$quali=$_POST['quali'];

$gender=$_POST['gender'];

$contact=$_POST['contact'];
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$confirm=$_POST['confirm'];


$file_loc=$_FILES['file_upload']['tmp_name'];
$file_name=$_FILES['file_upload']['name'];
$type=$_FILES['file_upload']['type'];
$size=$_FILES['file_upload']['size'];



$file_name=rand(1,1000).$file_name;
$folder="uploads/";
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


$new_file_name=strtolower($file_name);
$new_file_name=str_replace(' ','_',$new_file_name);


$query="select * from lecture where username='$uname'";
if ($result = mysqli_query($conn, $query)) {
	$i=0;
	  while ($row = mysqli_fetch_row($result)) {
	   $i++;
	 
	}
	if($i>0){
	
		echo "<script>
	alert('username already taken');
	window.location.href='lect_reg.html';
	</script>";
		
	}

// to check wheather the name is already exist or not
else{


  
    if(move_uploaded_file($file_loc,$folder.$new_file_name)){
		
	   $sql = "insert into lecture (NAME,TYPE,SIZE,first_name,qualification,gender,contact,username,password,confirm,id) values('$new_file_name','$type','$size','$fname','$quali','$gender','$contact','$uname','$pass','$confirm',null)";
	   $result = mysqli_query($conn, $sql);
	
	?>


	<script>
	alert("uploded successfully!!!");
	window.location.href="lect_reg.html";
	</script>
	<?php
   
	}
else{
?><script>
alert("error while uploding12!!!!");
window.location.href="lect_reg.html";
</script>
<?php
}

}
}


		


?>
