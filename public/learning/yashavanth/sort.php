<html>
    <body>
        <?php
        $bike=array("apache","sine","rx100");
sort($bike);
$clength=count($bike);
for($x = 0; $x < $clength; $x++) {
    echo $bike[$x];
    echo "<br>";
}
?>

</body>
</html>