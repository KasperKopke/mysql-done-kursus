 <?php
require_once 'connect.php';

$result = performQuery("SELECT * FROM persons ORDER BY age DESC");
while ($row = mysqli_fetch_array($result)){
    echo "<strong>" . $row['name'] . " - " . $row['ID'] . "</strong><br>";
    echo "alder: " . $row['age'] . "<br>";
    echo "Telefon: " . $row['phone'] . "<br>";
    echo "<br><hr>";
}
?>