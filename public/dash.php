<html>

<head>
    <title>dash-wave</title>
    <style>
    .right-col {
        width: 79%;
        height: 100%;
        font-family: arial;
        float: left;

    }

    .left-menu li {
        padding: 10px;
        list-style: none;
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
    }

    .box1 {
        border: 1px solid gray;
        width: 250px;
        height: 150px;
        padding: 30px;
        margin:20px;
        text-align: center;



    }

    .btn2 {
        background: #0f529f;
        width: 100%;
        list-style: triangle;
        border-radius: 100px;
        display: inline-block;
        box-sizing: border-box;
        height: 20%;
        color: #fff;
    }

    .cash {
            font-family: arial;
            font-size: 20px;
            margin-right:275px;
            margin-top:0px;

    }
    .para {
            color: blue;
            list-style: circle;
            padding: 5px;
            text-align: left;
            font-size: 20px;
            list-style: circle;

    }

    </style>

</head>

<body>



    <?php  
   include "menu.php" ;
   ?>
    <div class="right-col">
        <div style="float:left;">
            <h1>Dashboard</h1>
        </div>
        <div>
            <button class="btn" style="float:right;">Create a new</button>
        </div>
        <div style="clear:left;">
            <h2>Bank accounts and credit cards</h2>
        </div>
        <div class="box1" style="float:left;">

            <button class="btn2">Connect to a bank account</button>
            <h3>or</h3>
            <a style="color:#136acd;font-family:arial;text-decoration:none;" href="&">upload a bank statement</a>
        </div>
        <div class="cash" >
                <div style="color:black;font:averta,sans;font-size:30px;">
                    <h5>cash flow</h5><a style="color:#136acd;text-decoration:none;float:right;font-size:20px;" href="#">View report</a>
                    <div style="color:gray;font-size:24px;">
                        <h6>Coming in and going out of your business</h6>
                        <div style="float:right;">
                        
</div>             
                     <div class="para;" style="clear:left;">
                <div style="color:black;font-family:arial;">
                    <h4>THINGS YOU CAN DO</h4>
                </div>
                <div style="color:darkblue;padding:10px;">
                    Add a customer<br>
                    Add a vendor<br>
                    Customise<br>
                    Invite<br>
                     </div>
                        </div>
                        <div class="pro"style="float:right;color:darkslategray;">
                        <h7>Profit and loss</h7>
                        </div>
                    </div>
                
               
    </div>

    




</body>

</html>