<?php 
$dbname = "mysql:host=localhost;dbname=kllsystem";
$dbuser = "root";
$dbpass = "";

$conn = new PDO($dbname, $dbuser, $dbpass);

if (!$conn){
    echo "Not Connected to database";
} 
// else {
//     echo "Connected to database";
// }
?>