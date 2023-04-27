<?php
$mysqli = mysqli_connect("localhost", "root", "", "world");

if(mysqli_connect_errno())
echo "Connection failed" . mysqli_connect_errno();
else
echo "Connection Success!<br>";

function performQuery($sql){
    global $mysqli;
   $result = mysqli_query($mysqli, $sql);
   if ($result){
    echo "Query success";
    return $result;
   } else{
    echo "Noget gik galt!";
    return null;
   }
}
?>