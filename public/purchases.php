<html>
<head>
    <title>purchases</title>
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
            float:left;
        }

        .left-menu li {
            padding: 10px;
            list-style: none;
            text-decoration:none;
        }
        .table{
            border:2px solid black;
        }

        table td{
            padding:10px;
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
       
            include "menu.php";
            ?>
        <div class="right-col" style="text-decoration:none;" >
        <div style="float:left;padding:10px;">
        <h1>Purchases</h1>
        </div>
        <div style="float:right;">
        <form action="add-purchase.php">
    <button  class="btn" type="submit">Add Purchase</button>
    </div>
    </form>
 

<table style="width:1024px;">
        <tr style="text-align:left;"><br><br>
          
            <th style="width:30%;font-size:21px;padding:5px;">Consumer</th>
            <th style="width:30%;font-size:21x;padding:5px;">Product bought</th>
            <th style="width:25%;font-size:21px;padding:5px;">Status</th>
            <th style="width:25%;font-size:21px;padding:5px;">Due date</th>

        </tr >
<tr style="text-align:left;font-family:arial;">
            <td>
            Yashwanth
            </td>
            <td>
                Tyre
            </td>
            <td>Paid</td>
            <td>07-07-2019</td>
        </tr>
        <tr style="text-align:left;font-family:arial;">
            <td>
                Monish
            </td>
            <td>Steering</td>
            <td>Unpaid</td>
            <td>09-07-2019</td>

        <tr style="text-align:left;font-family:arial;">
        <td>Ragul</td>
        <td>Oil</td>
        <td>Paid</td>
        <td>11-07-2019</td>

        </tr>
        <tr style="text-align:left;font-family:arial;">
            <td>Shashwanth</td>
            <td>Grease</td>
            <td>Unpaid</td>
            <td>15-7-2019</td>
        </tr>
</table>
    </div>
    </div>


</body>
</head>
</html>