<html>

<head>
</head>
<style>
#wer {
    border: 1px solid black;
    height: 132%;
    width: 30%;
    float: left;
}

#azx {
    border: 1px solid black;
    height: 131%;
    width: 31%;
    float: left;
}
</style>

<body>
    <div id="wer">
        <h1>Syntax</h1>
        <?php
$txt= "my first php text <br>";
$x= "44590<br>";
$y="324<br>";

echo $txt;
echo $x;
echo $y;
$color ="silver";
 echo"my car is "  .$color. " in color.";
 ?>
        <h1> variables</h1>
        <?php
   echo "addition <br>";
   $x="5";
   $y="6";
   echo $x+$y;
   
   ?>
        <h2>globals</h2>
        <?php
 
$x = "5";
$y = "10";

function myTest() {
  global $x,$y;
  $y=$x+$y;
} 
myTest();
echo $y;echo "<br>";
echo "<h2>".'local'."</h2>";echo "<br>";
function mytest2(){
$x="3";
$y="4";
$y=$x+$y;
}
mytest2();echo $y;
echo "<h1>var dump</h1>";
$x="namakkal";
var_dump($x);echo "<br>";
echo "<h2>".'Boolean'."</h2>";echo "<br>";
  $x=3;
  $y=3;
  var_dump($x==$y);echo "<br>";
  echo "<h2>".'Concatenation'."</h2>";echo "<br>";
  $ert="hai";
  $yui="buddy!";
  echo "$ert $yui<br>";
  echo "<h2>".'Loops'."</h2>";echo "<br>";
$x=1;
while($x<=4){
  echo "the number is:$x";
  $x++;
}
?>
    </div>
    <div id="azx">
        <?php
$y=3;
do{
echo "the number is :$y";
  $y++;
} while ($y<=4);
echo "<h2>".'Array'."</h2>";echo "<br>";
$colors=array ("red","green","yellow"   );
foreach($colors as $value){
  echo "$value<br>";}
  echo "<h2>".'functions'."</h2>";echo "<br>";
  function familyname ($fname,$year){
    echo "$fname pgp born in $year";
  }
  familyname ("jhon", "2009");echo "<br>";
  $age=array("raja"=>"23","ram"=>"34");
  echo "raja is ".$age['raja']."years old"; echo "<br>";
  ?>
  <?php
    $age=array("bala"=>"23","ram"=>"34");
    ksort($age);
    foreach ($age as $x=>$x_value);
    {echo "key=".$x.",value=".$x_value;}  ?><br>
    <?php
    $x=500;
    $y=200;
    function subraction(){
      $GLOBALS['s']= $GLOBALS['x']-$GLOBALS['y'];}
      subraction();
      echo $s;  ?>






    
 





























    </div>













</body>
































</html>