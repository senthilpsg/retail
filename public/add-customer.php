<?php
var_dump($_POST); 
include_once "functions.php";

check_out();

if(isset($_POST['btn_save'])){
    $sr="localhost";
    $un="root";
    $p="";
    $n="retail";
    $conn = connect_db($sr,$un,$p,$n);
   
   $ID=$_POST[''];
   $customer_name=$_POST['customer_name'];
   $email=$_POST['email'];
   $phone_no=$_POST['phone_no'];
   $address=$_POST['address'];
   
   var_dump($_POST);

    $sql = "INSERT INTO `customer` ( `ID`, `customer_name`, `email`, `phone_no`, `address`)
     VALUES (NULL, '$customer_name', '$email', '$phone_no', '$address') ";
    
    //echo  "<br>". $sql . "</br>";

    $qr=mysqli_query($conn,$sql);

     header ("Location:customer.php");

}

    
    
    
    
     ?>




<html>
<title>customer list</title>
<head>
<style>

#input {
            width: 55%;
            height: 7%;
            margin: 1%;
            border: 1px solid #b2c2cd;
            border-radius: 4px;
            font-family: Averta, sans-serif;
            font-style: italic;
            color: slategrey;
            font-size: 16px;
}
.left-col{
            border-right: 1px #ebeff4;
            width: 20%;
            height: 100%;
            background: #ebeff4;
            font-family: arial;
            float: left;
            text-decoration:none;
        }
        .right-col{
            width: 80%;
            height: 100%;
            font-family: arial;
            float:left;
        }

        .left-menu li {
            padding: 10px;
            list-style: none;
            text-decoration:none;
        }
        .btn{
            background: #0f529f;
            width: 200px;
            list-style: triangle;
            border-radius: 100px;
            display: inline-block;
            box-sizing: border-box;
            height: 5%;
            color: #fff;
            font-size: 17px;
            padding-top:2px;
        }
</style>
<body>
<?php
            include "menu.php";
            ?>
        <div class="right-col" style="text-decoration:none;" >
        <h1>Add a Customer</h1>

    <div>

    <form action="" method="POST">
                customer_name:<input id="input" type="text" placeholder="" name="customer_name" required><br>
                email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="input" placeholder="" name="email" required><br>
                 phone_no:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="input" placeholder="" name="phone_no" required><br>
                <div style="height:2000px;width:800px;">
                 address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="input" placeholder="" name="address" required><br><br><br>
                 <div style="height:800px;width:800px;">
                 
                 <button class="btn" style="float:right;" name="btn_save">save</button>
                 </form>
                 </div>
                 
                </div>
         </div>
</body>
</head>
</html>