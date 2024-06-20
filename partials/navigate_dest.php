<?php
// <!-- Heading to the required destination -->

include "_dbconnect.php";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $dest_name = $_POST['destination'];
    echo $dest_name;

    if($dest_name =="NULL"){
        $showError ="Choose Proper Destination";
        header("location: /mini project/index.php?error=$showError");
        // echo "Choose Proper Destination";
   
    }
    else{
        $sql = "SELECT * FROM `destination` where dest_name='$dest_name' ";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        echo $num;
        while($row = mysqli_fetch_assoc($result) ){
            $dest_id = $row['dest_id'];
            echo $dest_id;
        }
        header("location: /mini project/popular_destination.php?dest_id=$dest_id");
    }
}



?>