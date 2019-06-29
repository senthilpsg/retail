<html>

<head>
    <title>wave page</title>
    <style>
        h1,h2{
            font-family: 'Times New Roman';
            font-size:50px;
        }
        .container {

            width: 400px;
            /* height: 100px; */
            margin:20px;
            
        }

        .username {
            
            width:100%;
            border-radius:10px;
            

        }

        .password {
        
            width:100%;
            border-radius:10px;
            

        }
        .forgotpassword{
            margin:10px;
            text-align:left;
            
            
        }
        .btn{
            background:#0f529f;
            color:#fff;
            width:100%;
            padding:8px 20px;
            border-radius:50px;
            display:inline-block;
            box-sizing:border-box;


        }
        
    
    </style>

<body>
    <center>
        <h1>wave</h1>
        <h2>sign in</h2>
    </center>
    <form>
       <center><div class="container">

            <center>
                <div class="username"><input style="min-height:40px;width:100%;background:#bad6f7;color#fff;" type="text"  placeholder="username"></div><br>
                <div class="password"><input style="min-height:40px;width:100%;background:#bad6f7;color#fff;" type="text" placeholder="password"></div><br>
                <div class="forgotpassword">
                <a href="forgotit.php">forgot password?</a>
                </div>
            <button class="btn">sign in</button></center>

        </div></center>
    </form>



</body>







</html>