<html>
<head>
<title>wave </title>
<style>



.right-col{
    
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
.menu{
    border:2px solid grey;
    width:100%;
    height:125px;
  
}


</style>
</head>
<body>
<?php
 include "menu.php";
 ?>
<div class="right-col">


<div >
<h1 style= "float:left">invoices</h1>
<button  style="width:200px;margin-left:o;margin-right:0;margin:4px;color:white;background:blue;border:1px solid transparent;text-align:center;min-width:100px;border-radius:500px;font-family: Averta,sans-serif;padding: 8px 20px;float:right;"  type="submit">create a invoices</button>
<div style="clear:both"></div>
</div>
<div class="menu">
<div style="display:inline-block;">
<span>overdue<br>$0.00</span><span>INR</span>
</div>
<div style="display:inline-block;">
<span>due with in next 30 days<br>$0.00</span><span>INR</span>
</div>
<div style="display:inline-block;">
<span>average time to get paid <br>0</span><span>days</span>
</div>
</div>
<form>
<input style="height:4%;width:20%;   
 display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    vertical-align: bottom;
    color: #b2c2cd;
    border: 1px solid #b2c2cd;
    border-radius: 4px;
    padding: 8px 10px 6px;
    transition: border .1s linear;
    min-height: 40px;
    max-width: none;
    box-shadow: none;
    position: relative;
    cursor: pointer;
    padding-right: 26px;
    background: white;
    margin: 0; 
    line-height:1.4;
   font-size:16px; " type="text" placeholder=" All Coustmer"> &nbsp;
<input style="height:4%;width:15%;display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    vertical-align: bottom;
    color: #b2c2cd;
    border: 1px solid #b2c2cd;
    border-radius: 4px;
    padding: 8px 10px 6px;
    transition: border .1s linear;
    min-height: 40px;
    max-width: none;
    box-shadow: none;
    position: relative;
    cursor: pointer;
    padding-right: 26px;
    background: white;
    margin: 0;
    line-height:1.4;
   font-size:16px;  "type="text"placeholder="all status"> &nbsp;
<input style="height:4%;width:12%;display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    vertical-align: bottom;
    color: #b2c2cd;
    border: 1px solid #b2c2cd;
    border-radius: 4px;
    padding: 8px 10px 6px;
    transition: border .1s linear;
    min-height: 40px;
    max-width: none;
    box-shadow: none;
    position: relative;
    cursor: pointer ;
    padding-right: 26px;
    background: white;
    margin: 0;
    line-height:1.4;
   font-size:16px; " type="text" placeholder="from">
<input style="height:4%;width:12%;display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    vertical-align: bottom;
    color: #b2c2cd;
    border: 1px solid #b2c2cd;
    border-radius: 4px; 
    padding: 8px 10px 6px;
    transition: border .1s linear;
    min-height: 40px;
    max-width: none;
    box-shadow: none;
    position: relative;
    cursor: pointer;
    padding-right: 26px;
    background: white;
    margin: 0;
    line-height:1.4;
   font-size:16px; "type="text"placeholder="to">&nbsp;
<input style="height:4%;width:17%;display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    vertical-align: bottom;
    color: #b2c2cd;
    border: 1px solid #b2c2cd;
    border-radius: 4px;
     padding: 8px 10px 6px;
    transition: border .1s linear;
    min-height: 40px;
    max-width: none;
    box-shadow: none;
    position: relative;
    cursor: pointer;
    padding-right: 26px;
    background: white;
    margin: 0;
    line-height:1.4;
   font-size:16px; " type="text"placeholder="enter invoice#">

</form>
<br>
<div><a href="#" style="clear:left;
    color: #1c252c;
    font-weight: bold;
    cursor: pointer;
    font-size: 16px;
    line-height: 1.4;
    font-family: Averta,sans-serif;
    background: #dcdfe0;
    color: #5c686a;
    font-weight: 600;
    padding: 0 6px;
    border-radius: 500px;
    border-bottom: 4px solid #136acd;"> unpaid 0 </a> &nbsp;
     <a href="#" style="clear:left;
    color: #1c252c;
    font-weight: bold;
    cursor: pointer;
    font-size: 16px;
    line-height: 1.4;
    font-family: Averta,sans-serif;
    background: #dcdfe0;
    color: #5c686a;
    font-weight: 600;
    padding: 0 6px;
    border-radius: 500px;
    border-bottom: 4px solid #136acd;">  draft 0 </a> &nbsp; 
     <a href="#" style="clear:left;
    color: #1c252c;
    font-weight: bold;
    cursor: pointer;
    font-size: 16px;
    line-height: 1.4;
    font-family: Averta,sans-serif;
    background: #dcdfe0;
    color: #5c686a;
    font-weight: 600;
    padding: 0 6px;
    border-radius: 500px;
    border-bottom: 4px solid #136acd;">All invoices </a><hr>
</div>
<center><h2> you have a unpaid invoices</h2>
<br>
<p> you have 0 draft invoice.what will you like to do next</p>
<button type="sumbit" style="border-radius:500px;padding: 8px 20px;">create an invoices</button>
<button type="sumbit" style="border-radius:500px;padding: 8px 20px;">view drafts</button></center>

</div>        
</body>
</html>
