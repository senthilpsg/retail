<html>
    <body>
        <?php
        $x=70;
        $y=30;
        function subraction()
        {
$GLOBALS['z']=$GLOBALS['x']-$GLOBALS['y'];
        }
subraction();
echo"$z";
?>
</body>
</html>