<?php

$_name=$_POST[name]
$_gender=$_POST[gender]
$_address=$_POST[address]
$_email=$_POST[email]
$_pincode=$_POST[pincode]


//Creating conection:

$servername="localhost";
$username="root";
$password="";
$database="Payment forms"

$conn= mysqli_connect($servername, $userrname, $password, $database);

if(!$conn){
    die("Failed to connect---->".mysqli_connect_error());
}
else{
    echo "Connection Successful";
}




?>