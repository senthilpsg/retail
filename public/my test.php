<!DOCTYPE html>
<html>
<body>
<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="shash";
$u=$_GET["username"];
$p=$_GET["password"];


$conn = mysqli_connect($servername, $username, $pass,$dbname);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql="SELECT * FROM login WHERE username=$u";
$result=mysqli_query($conn,$sql);
$shah=mysqli_fetch_array ($result);
if ($shah['pass']==$p){
    header('location:dash.php');
}else{
    header('location:index.php');
}
mysqli_close($conn);
?>
</body>
</html>