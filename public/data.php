
<!DOCTYPE html>
<html>
<body>
<p>Hello data .php file</p>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="example";


$u=$_GET["username"];
$p=$_GET["pass"];





// Create connection
$conn = mysqli_connect("localhost", $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




$sql = "SELECT * FROM login WHERE username='$u'";
$result=mysqli_query($conn, $sql);

$monish=mysqli_fetch_array($result);

if($monish['password']==$p){
header('Location:dash.php');
}else{
    header('Location:index.php');
}


mysqli_close($conn);

?>

</body>
</html>
