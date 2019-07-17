<html>
<title>customer list</title>
<style>

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
</style>
<body>
<form action="">
<?php
            include "menu-2.php";
            ?>
        <div class="right-col" style="text-decoration:none;" >
        <h1>Add a Customer</h1>
    <div style="float:right;padding-down:30px;">

    </div>
            <div><input id="input" type="text" placeholder="" name="email" required>
            </div>
            <div>
                <input type="text" id="input" placeholder="" name="password" required>
                <input type="text" id="input" placeholder="" name="username" required>
                <input type="text" id="input" placeholder="" name="phone_no" required>
                <input type="text" id="input" placeholder="" name="displ" required>
            </div>
</body>
</html>