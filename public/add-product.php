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
 include "functions.php";
 check_out();

            include "menu-2.php";
            ?>
        <div class="right-col" style="text-decoration:none;" >
        <h1>Add a Product</h1>

    <div>
                Product name:<input id="input" type="text" placeholder="" name="productname" required><br>
                Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="input" placeholder="" name="price" required><br>
                Brand:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="brand" id="input" placeholder="" name="email" required><br>
                Quantity:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="input" placeholder="" name="quantity" required><br>
                <form action="product.php">
                 <button class="btn" style="float:right;">Add</button>
                 </form>
                 </div>
                 
                </div>
         </div>
</body>
</head>
</html>