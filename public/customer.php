<?php

include_once "functions.php";
check_out();

var_dump($_POST);


    
    $sr="localhost";
     $un="root";
     $p="";
     $n="retail";
     connect_db($sr,$un,$p,$n);

    //  $qr=mysqli_query($conn,$sql);
    $cust = [];

    $cust= get_customer();


function get_customer() {
    global $conn;
    $sql="select * from customer" ;

    $result=mysqli_query($conn,$sql);
    $customer = [];

    while ($row = mysqli_fetch_assoc($result)){
        $customer[] = $row;
    }
    
    return $customer;


}




?>





<html>

<head>
    <title>customer</title>
    <style>
    .left-col {
        border-right: 1px #ebeff4;
        width: 20%;
        height: 100%;
        background: #ebeff4;
        font-family: arial;
        float: left;
        text-decoration: none;
    }

    .right-col {
        width: 80%;
        height: 100%;
        font-family: arial;
        float: left;
    }

    .left-menu li {
        padding: 10px;
        list-style: none;
        text-decoration: none;
    }

    .btn {
        background: #0f529f;
        width: 200px;
        list-style: triangle;
        border-radius: 100px;
        display: inline-block;
        box-sizing: border-box;
        height: 5%;
        color: #fff;
        font-size: 17px;
        padding-top: 2px;
    }

    .table {
        border: 2px solid black;
    }

    table td {
        padding: 10px;
    }
    </style>

<body>
    <?php
            include "menu.php";
            ?>
    <div class="right-col" style="text-decoration:none;">
        <h1>Customers</h1>
        <div style="float:right;padding-down:30px;">
            <form action="add-customer.php">
                <button class="btn" type="submit">Add a customer</button>
            </form>


        </div>

        <style></style>
        <table style="width:1024px;">
    
            <tr style="text-align:left;"><br><br><br><br><br>

                <th style=width:30%;>Name</th>
                <th style=width:30%;>Email</th>
                <th style=width:25%;>Phone</th>
                <th style=width:25%;>Action</th>

            </tr>
            <?php
            $i=0;
            foreach($cust as $c) {
                $i++;
                
            ?>
<tr>
            <td>
                <?php echo $c['customer_name'] ; ?>
            </td>
            <td>
            <?php echo $c['email'] ; ?>
            </td>
            <td>
            <?php echo $c['phone_no'] ; ?>
            </td>
            <td>Delete</td>
            </tr>
            <? }?>
          
            
        </table>
    </div>
    </div>


</body>

</head>

</html>