<?php
$servername="localhost";
$username="root";
$password="";
$dbname="extra";
$u=$_GET['uname'];
$y=$_GET['psw'];

$conn = mysqli_connect("localhost","root","","$dbname");
if($conn){
echo "connected succesfully";
}
else
{
    echo "connection failed ";
}

$sql = "SELECT * FROM login WHERE username='$u'";
$result=mysqli_query($conn,$sql);
if($result){
    echo "connected succesfully";
    }
    else
    {
        echo "connection failed ";
    }
$yash=mysqli_fetch_array($result);
var_dump($yash);
if($yash['password']==$y){
    header("location:dash.php");
}
else{
    header("location:index.php");
}
mysqli_close($conn);

?>