 <?php
require_once 'connect.php';
performQuery("UPDATE persons SET age=18 WHERE age=17");
performQuery("DELETE FROM persons WHERE name='Kasper Køpke'");
?>