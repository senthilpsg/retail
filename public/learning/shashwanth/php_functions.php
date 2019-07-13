<!DOCTYPE html>
<html>
<body>

<?php
function playername($Pname) {
    echo "$Pname Refsnes.<br>";
}

$a =0;
$b=0;
$c=0;

$test = "Testing";

function sum($a,$b,$c,$test){
     
    $sum = $a+$b+$c;
    echo "<br>inside sum function:".$test;
    return $sum;
}

echo "<br>Start of page<br>";

playername("dhoni");
playerName("raina");
playerName("jadeja");
playerName("virat");
playerName("bumrah");


$res = sum(90,70,50,$test);
echo "<br>Outside sum function". $a. $b.$c;
echo "<br> Total Marks by shashwanth: ";
echo $res;

$res = sum(80,75,65,"Monish");

echo "<br> Total Marks by Monish ";
echo $res;

$res = sum(60,40,50,"Ragul");

echo "<br> Total Marks by Ragul: ";
echo $res;

$res = sum(30,40,50,"Yashwanth");

echo "<br> Total Marks by Yashwanth: ";
echo $res;

?>

</body>
</html>