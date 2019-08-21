<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shash";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "DELETE FROM `login` WHERE username='perfectlyimperfect7688@gmail.com'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
echo "<br>";
$upd= "UPDATE login  SET username='shahh' WHERE password='shash'";
if ($conn->query($upd) === TRUE) {

    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
?>
