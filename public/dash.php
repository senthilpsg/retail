<html>
    <head>
        <title>dash-wave</title>
        <style>
            .left-col{
                border-right:1px solid blue;
                width:20%;
                height:100%;
                background:lightslategray;
                font-family:arial;
                float:left;
            }
            .right-col{
                width:80%;
                height:100%;
                padding:15px;
                float:left;
                
            }
            .left-menu li{
                padding:5px;
                list-style:none;
            }
            .btn{
                background:#0f529f;
                width:200px;
                list-style:triangle;
                border-radius:100px;
                display:inline-block;
                box-sizing:border-box;
                height:5%;
                color:#fff;
                 
                
                margin-top:2px;
                right:1px;
                

            }
            .box1{
                border:1px solid gray;
                width:200px;
                height:200px;
                padding:30px;
                float:top;
                margin:300px;
                text-align:center;
                
                 
            }
            .btn2{
                background:#0f529f;
                width:100%;
                list-style:triangle;
                border-radius:100px;
                display:inline-block;
                box-sizing:border-box;
                height:25%;
                color:#fff;
            }
            .para{
                color:blue;
                list-style:circle;
                padding:5px;
                text-align:left;
                font-size:20px;
                list-style:circle;
        
            }
            h4{
                font-family:arial;
                float:left;
                font-size:20px;
            } 
            .cash{
                font-family:arial;
                font-size:20px;
            }       
             </style>

    </head>
    <body>
    <div class="container">
   <?php  
   include "menu.php" ;
   ?>
    <div class="right-col">
        
  
    

    </div>
</div>
<h1>Dashboard</h1>
<button class="btn">Create a new</button>
<h2>Bank accounts and credit cards</h2>
<div class="box1">
    <button class="btn2">Connect to a bank account</button>
    <h3>or</h3>
    <a href="&">upload a bank statement</a>
        </div>
    <h4>THINGS YOU CAN DO</h4>
    <div class="para">
                                                               
    Add a customer<br>
    Add a vendor<br>
    Customise<br>
    Invite<br>
        </div>
        <div class="cash">
    <h5>cash flow</h5>
    <a href="#">view report</a>
        </div>
    </body>
</html>