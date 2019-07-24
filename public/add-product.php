 <?php
 include "functions.php";
 check_out();

 $a="localhost";
 $b="root";
 $c="";
 $d="retail";
 connect_db($a,$b,$c,$d);
 //var_dump($_POST);

$produc_name = $_POST['product_name'];

 $product_price=$_POST['product_price'];
 $sql="INSERT INTO `product` ( `product_name`, `product_price`) VALUES
    ( '$product_name','$product_price')";
    
    //echo "<br><br>" . //$sql . "<br>";
   $cc= mysqli_query($conn,$sql);   
    
    $row = mysqli_fetch_assoc($cc);

    return $row;

}

    

 if(isset($_POST['btn_register'])){
    $a="localhost";
    $b="root";
    $c="";
    $d="retail";
    connect_db($a,$b,$c,$d);
    //var_dump($_POST);
      
      $product_name=$_POST['product_name'];
      $product_price=$_POST['product_price'];
   
    $sql="INSERT INTO `product` ( `product_name`, `product_price`) VALUES
       ( '$product_name','$product_price')";
       
       echo "<br><br>" . $sql . "<br>";
       
      $cc= mysqli_query($conn,$sql);
      header('Location:products.php')   ;
 }   
   
?>
 <html>
 <title>add a product</title>

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
     </style>

 <body>
     <?php
            include "menu.php";
            ?>
     <div class="right-col" style="text-decoration:none;">
         <h1>Add a Product</h1>

         <div>
             <form action="" method="POST">
                 
                 product name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" id="input"
                     placeholder="" name="product_name" required><br>
                 product pirce:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input
                     type="text" id="input" placeholder="" name="product_price" required><br>


                 <button class="btn" name="btn_register" style="float:right;">Add</button>
             </form>
         </div>

     </div>
     </div>
 </body>
 </head>

 </html