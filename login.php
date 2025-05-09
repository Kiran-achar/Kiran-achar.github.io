<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
$role = $_POST['role'];

$conn = new mysqli("localhost", "root", "", "e-notes");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/*if ($role == 'Admin') 
{
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username='$user' AND password='$pass'");
    $stmt->bind_param("ss", $user, $pass);
} 
else if ($role == 'Student') 
{
    $stmt = $conn->prepare("SELECT * FROM student WHERE username='$user' AND password='$pass'");
    $stmt->bind_param("ss", $user, $pass);
} 
else if($role=='Lecturer')
{
	$stmt = $conn->prepare("SELECT * FROM lecture WHERE username='$user' AND password='$pass'");
    $stmt->bind_param("ss", $user, $pass);
}
else
{
	echo"invalid user!";
}*/
if ($role == 'Admin') {
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username=? AND password=?");
    $stmt->bind_param("ss", $user, $pass);
} else if ($role == 'Student') {
    $stmt = $conn->prepare("SELECT * FROM student WHERE username=? AND password=?");
    $stmt->bind_param("ss", $user, $pass);
} else if ($role == 'Lecturer') {
    $stmt = $conn->prepare("SELECT * FROM lecture WHERE username=? AND password=?");
    $stmt->bind_param("ss", $user, $pass);
} else {
    die("Invalid role selected.");
}

	

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('Login successfully!');";
    if ($role == 'Admin') {
        echo "window.location.href='admin_successfull.php'";
    } else if ($role == 'Student') {
        echo "window.location.href='stu_successfull.php?user=" . urlencode($user) . "'";
    } else if ($role == 'Lecturer') {
        echo "window.location.href='lect_successfull.php?user=" . urlencode($user) . "'";
    }
    echo "</script>";
}
else{
		echo"<script>
		alert('login failed');

		window.location.href='login.html'
				</script>";
}


$stmt->close();
$conn->close();
?>
