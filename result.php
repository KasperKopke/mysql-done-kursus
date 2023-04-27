<?php
require_once 'connect.php';

$result = performQuery("SELECT * FROM persons");
while ($row = mysqli_fetch_array($result)){
    echo "<h3>Ny Person</h3>";
    echo $row[0] . "<br>";
    echo $row['age'] . "<br>";
    echo $row[2] . "<br><br>";
}
?>