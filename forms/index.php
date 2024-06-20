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
