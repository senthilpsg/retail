<?php
//var_dump($_GET);
$message = '';
$username ='';
$pass = '';
$conn=null;




//IF submit button clicked
if(isset($_GET['username'])){
        login();
}


function login(){
    global $conn,$username,$message,$pass;
    
    $servername='localhost';
    $dbname='retail';
    $db_username="root";
    $db_password ="";

    
    $username= $_GET['username'];

    $pass=$_GET['pass'];    
    
    $conn = connect_db($servername,$db_username,$db_password,$dbname);
    
   
    if(authenticate($username,$pass)){
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

function connect_db($server,$user,$pass,$dbname){
    
    $conn = mysqli_connect($server,$user, $pass,$dbname);
    
    if ($conn) {
        return $conn;
    }
    
        else{
            ("Connection failed: " . mysqli_connect_error());
    }
    
}

/*
*  This function receives username as parameters, 
    gets data from database for this username, 
    and returns that data
*/
function get_user($username){
    global $conn;
    $sql="select * from user where username='" . $username . "' ";
    
    $result=mysqli_query($conn,$sql);
    
    $row = mysqli_fetch_assoc($result);

    return $row;

}

function authenticate($username,$password){

    $userdata = get_user($username);

    if($userdata == null)
        return false;

    // echo "<br> User data from DB <br>" ;
    // var_dump($userdata);

    $db_username = $userdata['username'];
    
    $db_password = $userdata['password'];
   
   
    if($password == $db_password){
       return true;
   }
   else{
     return false;
   }

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