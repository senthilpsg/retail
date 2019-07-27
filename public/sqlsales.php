<?php
$servername="localhost"
$username="root"
$password=""
$dbname="retail"
$u=$_GET['customer']
$y=$_GET['sales amount']

$conn=mysqli_connect("localhost","root","","$dbname")
if($conn){
echo "coonection succesfull"
}
else
{
echo "connection failed"
}
