<!DOCTYPE html>
<html>
<body>

<?php
$t = date("H");
echo "<p>the best time to learn is" . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
    echo "learn at morning";
} elseif ($t < "20") {
    echo "learn at afternoon";
} else {
    echo "learn at night";
}
?>
 
</body>
</html