<?php
//var_dump($_GET);
$message = '';
$username ='';
$pass = '';


if(isset($_GET['username']))
$username= $_GET['username'];


if(isset($_GET['pass']))
$pass=$_GET['pass'];    


if(isset($_GET['username'])){

$servername='localhost';
$dbname='retail';

$conn = mysqli_connect($servername,"root", "",$dbname);


if ($conn) {
}

    else{
        ("Connection failed: " . mysqli_connect_error());
}

$sql="select * from user where username='" . $username . "' ";



$result=mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

 $db_username = $row['username'];

 $db_password = $row['password'];


 if($pass == $db_password){
    header ("location:dash.php");
}
else{
  $message = "Login Failed";
}

// echo "<br>Rows returned" . mysqli_num_rows($result);

// echo "<br><br> Rows Data";
// while($row = mysqli_fetch_assoc($result)) {
//     //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";

//     var_dump($row);
// }

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