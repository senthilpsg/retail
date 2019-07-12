<html>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="example1";

$u=$_GET['email'];
$p=$_GET[ 'password'];




$conn= new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die("connection failed" .$conn->connect_error);

}
echo "connected successfully";
 $cc=mysqli_query($conn,"INSERT INTO login(username,password)VALUES ('$u','$p')");
if($cc){
    echo "inserted data";
    header('Location:../../index.php');
}
mysqli_close($conn)




























?>





































</body>














































</html>