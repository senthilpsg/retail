<?php

include_once 'functions.php';
//var_dump($_POST);
$message = '';

if(isset($_POST['btn_register'])){

    sign_up();
  
}





?>

<html>

<head>
</head>

<body>
    <center>
      <h1 style="color: #0f529f;">RETAIL</h1>

        <p class="message"><?php echo $message ?></p>

    </center>
    <!--<h1 style="text-align: center; font-family: Averta,sans-serif;">Check out Wave - it's free!</h1>-->
    <center>
        <form>
            <!-- <p id="tsa"> Wave helps over 3.5 million freelancers, consultants,<br>
                and small business simplify their finances.</p> -->
        </form>
        <style>
        #tsa {
            color: #718fa2;
            font-size: 155%;
            font-family: Averta, sans-serif;
        }

        #input {
            width: 55%;
            height: 7%;
            margin: 1%;
            border: 1px solid #b2c2cd;
            border-radius: 4px;
            font-family: Averta, sans-serif;
            font-style: italic;
            color: #b2c2cd;
            font-size: 16px;

        }

        #gh {

            margin-left: -36%;
            color: #4d6575;
            font-family: Averta, sans-serif;
            font-size: 78%;


        }

        #vsm {
            text-align: center;
            width: 55%;
            height: 7%;
            color: black;
            font-size: 19px;
            border: 1px solid #b2c2cd;
            border-radius: 500px;
            font-family: Averta, sans-serif;
            margin-top: 40px;
            background: #0f529f;
            color:white;
        }
        #in{
            text-align: center;
            width: 55%;
            height: 7%;
            color: black;
            font-size: 19px;
            border: 1px solid #b2c2cd;
            border-radius: 500px;
            font-family: Averta, sans-serif;
            margin-top: 40px;
            background: #0f529f;
            color:white;
            margin-top:7px;
        }
        </style>
        <form action="" method="POST">
            <div><input id="input" type="text" placeholder="  Email" name="email" required>
            </div>
            <div>
                <input type="password" id="input" placeholder=" Password" name="password" required>
                <input type="text" id="input" placeholder="  username" name="username" required>
                <input type="text" id="input" placeholder="  phone no" name="phone_no" required>
                <input type="text" id="input" placeholder="  display name" name="display_name" required>
            </div>
    </center>
    <center>

        <div id="gh"> At least 6 characters, but longer is better.</div>
    </center>


    <center>
        <button id="vsm" name="btn_register"> Register </button>
        </form>
        <form action="index.php">
        <button id="in" name="signin"> sign in</button>
        </form>
    </center>
    

</body>

</html>