<html>
<head>
    <title>customer</title>
    <style>
        .left-col{
            border-right: 1px #ebeff4;
            width: 20%;
            height: 100%;
            background: #ebeff4;
            font-family: arial;
            float: left;
            text-decoration: none;
        }
        .right-col{
            width: 80%;
            height: 100%;
            font-family: arial;
        }

        .left-menu li {
            padding: 10px;
            list-style: none;
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
        }
    </style>
    <body>
        <div class="container">
            <?php
            include "menu-2.php";
            ?>
        <div class="right-col" >
        <h1>Customers</h1>
    </div>
    <div style="float:right;">
    <button class="btn">Add a customer</button>
    </div>


</body>
    
</head>
</html>