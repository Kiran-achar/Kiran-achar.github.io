<?php


$sub=$_POST['suub'];
$user = $_GET['user'] ?? '';

$file_loc=$_FILES['file_upload']['tmp_name'];
$file_name=$_FILES['file_upload']['name'];
$type=$_FILES['file_upload']['type'];
$size=$_FILES['file_upload']['size'];
$des=$_POST['z'];

$file_name=rand(1,1000).$file_name;
$folder="uploads/$sub/";
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
$sql = "select first_name from lecture where username='$user'";

if ($result = mysqli_query($conn, $sql)) {
$i=0;
  while ($row = mysqli_fetch_row($result)) {
   $nm=$row[0];
  
 
}
}

$new_file_name=strtolower($file_name);
$new_file_name=str_replace(' ','_',$new_file_name);

  
    if(move_uploaded_file($file_loc,$folder.$new_file_name)){
       // echo "file location=$file_loc name=$folder.$new_file_name type=$type size=$size<br>";
        $sql = "insert into tbl_uploads (NAME,subject,TYPE,SIZE,description,uploaded_by) values('$new_file_name','$sub','$type','$size','$des','$nm')";

$result = mysqli_query($conn, $sql)

?>

        <script>
            alert("thanks for uploading, file uploded successfully!!!");
            window.location.href="lect_successfull.php?user=<?php echo urlencode($user); ?>";
            </script>
            <?php
           
            }
    else{
        ?><script>
        alert("error while uploding12!!!!");
		window.location.href="lect_successfull.php?user=<?php echo urlencode($user); ?>";
        </script>
        <?php
    
    }







?>