<?php

include_once 'functions.php';

//var_dump($_GET);
$message = '';
$username ='';
$pass = '';





//IF submit button clicked
if(isset($_GET['username'])){
    login();
}


?>

<html>

<head>
    <title>wave page</title>
    <center>
        <img src="img/logo-full-black.svg" alt="wave">
    </center>
    <style>
    h1,
    h2 {
        font-family: 'arial';
        font-size: 40px;
        color: "dimslategrey";
    }

    .container {

        width: 400px;
        /* height: 100px; */
        margin: 20px;

    }

    .username {

        width: 100%;
        border-radius: 10px;


    }

    .password {

        width: 100%;
        border-radius: 10px;


    }

    .forgotpassword {
        margin: 10px;
        text-align: left;

    }

    .btn {
        background: #0f529f;
        color: #fff;
        width: 100%;
        padding: 8px 20px;
        border-radius: 50px;
        display: inline-block;
        box-sizing: border-box;


    }
    </style>

<body>
    <center>
        <h2>sign in</h2>

        <p><?php echo $message;  ?></p>
    </center>
    <form action=""" method=" get">
        <center>
            <div class="container">

                <center>
                    <div class="username">
                        <input style="min-height:40px;width:100%;background:#bad6f7;color#fff;" type="text"
                            placeholder="username" name="username" required></div><br>



                    <div class="password" required>

                        <input style="min-height:40px;width:100%;background:#bad6f7;color#fff;" type="text"
                            placeholder="password" name="pass"></div><br>



                    <div class="forgotpassword">
                        <a style="text-decoration:none;" href="forgotit.php">forgot password?</a>
                    </div>

                    <button class="btn" type="submit">sign in</button>


            </div>
        </center>
    </form>



</body>







</html>