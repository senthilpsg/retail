<html>
<head>

<style>

.left-col{
    border-right:1px solid blue;

    width:20%;

    float:left;

    height:100vh;
    background: lightgray;
}

.right-col{
    /* border:1px solid red; */
    width:78%;
    float:left;
    height:100vh;
    padding:10px;
    padding-top:0;
}

.left-menu li{
        padding:5px;
        
        list-style:none;
}


</style>

</head>
<body>
<div class="container">
   <?php   
   include "menu.php" ;
   ?>
    <div class="right-col">
    <h1>Sales</h1>
    </div>
</div>

</body>
</html>