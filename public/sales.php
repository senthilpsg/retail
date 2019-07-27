<?php
$servername="localhost";
$username="root";
$password="";
$dbname="retail";
$u=$_GET['customer'];
$y=$_GET['sales_amount'];

$conn=mysqli_connect("localhost","root","","$dbname");
if($conn){
echo "coonection succesfull";
}
else
{
echo "connection failed";
}
$sql="INSERT INTO sales  (customer,sales_amount)VALUES('$u','$y')";

$result = mysqli_query($conn,$sql);


$sql1 = "SELECT * FROM sales";
$result1 = mysqli_query($conn,$sql1);
if($result){
  echo "connected succesfully";
}
else
{
  echo "connected failed";

}


?>



<html>
<head>
<title>retail </title>
<style>
.sales {
    width:100%;
  padding: 15px;
  text-align: left;
 background-color: #fff;
  background-color: black;
  color: white;
}
</style>
</head>
<body>

<h2>Styling Tables</h2>

<table class="sales">
  <tr>
    <th>customer</th>
    <th>sales amount</th> 
  </tr>
  <form method="get">
  <tr>
 <td><input type="text" name="customer"><button type="submit">go</button></td>
    <td><input type="text" name="sales_amount"><button  type="submit">go</button></td>
  </tr></form>
<?php 

while($r1=mysqli_fetch_array($result1))
{
  

?>
  <tr>
    <td><?php echo $r1['customer']?></td>
    <td><?php echo $r1['sales_amount']?></td>
  </tr>
<?php
}
?>


</table>

</body>
</html>

