<?php
$servername = "localhost";
$username = "root";
$password ="";
$database = "taj";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("Falied to connect due to ---->". mysqli_error($conn));
}


?>