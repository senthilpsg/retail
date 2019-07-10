DOCTYPE html>
<html>
<body>

<?php
class bike {
    function bike() {
        $this->model = "bmw";
    }
}

$herbie = new bike();
echo $herbie->model;
?>

</body>
</html>