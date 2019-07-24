<?php

global $conn;

session_start();
function check_out(){
    if(!isset($_SESSION['username'])){
        header('Location: index.php');
       }
    
}

/*
This function creates a connection to mysql database and returns a connection number
*/

function connect_db($server="localhost",$user="root",$pass="",$dbname="retail"){

    global $conn;
    $conn = mysqli_connect($server,$user, $pass,$dbname);
    
    if ($conn) {
        return $conn;
    }
    
        else{
            die("Connection failed: " . mysqli_connect_error());
    }
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

        $_SESSION['username'] = $username;

        header ("location:dash.php");
    }
    else{
        $message = "Login Failed";
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

function get_products() {
    global $conn;
    $sql="select * from product" ;
    $products = [];
    
    $result=mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($result)){
        $products[] = $row;
    }

    return $products;


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

function save_user($username,$password,$email,$phone_no,$display_name){
    global $conn;
    
    $sql="INSERT INTO `user` ( `username`, `password`, `user_email`, `display_name`,                `phone_no`, `status`, `date-time`) VALUES
    ('$username', '$password', '$email', '$display_name', '$phone_no', 'active', '2019-07-13')";
    
    //echo "<br><br>" . //$sql . "<br>";
    $qr=mysqli_query($conn,$sql);
    return $qr;
}

function sign_up(){
    global $message;

     $a="localhost";
     $b="root";
     $c="";
     $d="retail";

    connect_db($a,$b,$c,$d);
   

    $email=$_POST['email'];
    $password=$_POST['password'];
    $username=$_POST['username'];
    $phone_no=$_POST['phone_no'];
    $display_name=$_POST['display_name'];

    $res = save_user($username,$password,$email,$phone_no,$display_name);

    if($res){
        $message = "User Successfully Registered";
    }
    else{
        $message = "Error in registering the user";    
    }
}
    
?>