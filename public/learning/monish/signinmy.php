<html>
<body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="example1";

$u=$_GET["username"];
$p=$_GET["password"];







$conn= new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die("connection failed" .$conn->connect_error);

}
echo "connected successfully";
$sql="SELECT * FROM login WHERE username='$u'";
$result=mysqli_query($conn,$sql);
$vsm=mysqli_fetch_array ($result);

if ($vsm['password']==$p){
     header('Location:dash.php');
}else{
header('Location:signinvsm.php');
}


    





mysqli_close($conn)




























?>





































</body>














































</html>