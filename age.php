 <?php
require_once 'connect.php';

$result = performQuery("SELECT * FROM persons WHERE age=17");
while ($row = mysqli_fetch_array($result)){
    echo "<strong>New Person</strong><br>";
    echo $row['name'] . "<br>";
}
?>