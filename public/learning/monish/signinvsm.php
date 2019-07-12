<html>

<head>
    <style>
      
        #input{
            width:33%;
            height: 8%;
            margin: 1%;
         
        }
        #vsm{
            width: 33%;
            height: 7%;
            color: white;
            background: slateblue;
            border-radius: 500px;
        }
       
    </style>
</head>

<body>
    <center>
    <h1>WAVE</h1>
    <h3 >sign in</h3>
    <form action="signinmy.php" method="get">
        <div ><input id="input" type="text" placeholder="username" name="username" required>
        </div>
        <div>
            <input type="text" id="input" placeholder="password" name="password" required>
        </div>
        <p style="color: slateblue;"><a href="root.php"> Forgot it?</a> </p>
        <button id="vsm">
     sign in </button><br>

    </form>
   
   

     <form action="vsm.php">
     <input id="vsm" type="submit" value="sign up">
    </form>    
    
</center>
</body>

</html>