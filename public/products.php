<?php
 include "functions.php";
 check_out();
 
 connect_db();
 $products = get_products();
 
?>
<html>

<head>
    <title>products</title>
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
        <div style="float:left;">
            <h1>Products</h1>
        </div>
        <div style="float:right;padding-down:30px;">
            <form action="add-product.php">
                <button class="btn" type="submit">Add a product</button>
            </form>


        </div>

        <style></style>
        <table style="width:1024px;">
            <tr style="text-align:left;"><br><br><br><br><br>

                <th style=width:30%;>id</th>
                <th style=width:30%;>productName</th>
                <th style=width:25%;>Price</th>
            

            </tr>
            
            <?php 
            
            $i=0;
            foreach($products as $p) { 
                $i++;
                ?>
            <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $p['product_name'] ?></td>
            <td><?php echo $p['product_price'] ?></td>
            
            </tr>
            
            <?php } ?>
            
            
        </table>
    </div>
    </div>


</body>

</head>

</html>