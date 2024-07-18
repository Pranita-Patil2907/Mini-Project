<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Bill</title>
    <link rel="stylesheet" href="bill_Print.css">
    <!-- Bootstrap -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- font awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<?php
include "partials/_dbconnect.php";

// Declaring static variable for Invoice No:
    $sql = "SELECT * FROM `booking`";
    $result= mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    // echo $num;
    static $invoice = 0;
    
    $num = (int) $num;
    $invoice = (int) $invoice;
    $invoice = $invoice + $num;
?>


<?php

// Inserting Procedure:
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    $destination = $_GET['destination'];
    $room_type = $_GET['room-type'];
    $no_rooms = $_GET['no_rooms'];
    $no_days = $_GET['no_days'];
    $check_in = $_GET['check_in'];
    $check_out = $_GET['check_out'];
    $fname = $_GET['fname'];
    $mname = $_GET['mname'];
    $lname = $_GET['lname'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $address = $_GET['address'];


    $sql1= "SELECT * FROM `rooms` WHERE room_id = '$room_type' ";
    $result1 = mysqli_query($conn, $sql1);
    while($row2 = mysqli_fetch_assoc($result1)){
        $room_name = $row2['room_type'];
    }



    $sql = "INSERT INTO `booking` (`destination`, `room_type`, `no_rooms`, `no_days`, `check_in`, `check_out`, `fname`, `mname`, `lname`, `email`, `phone`, `Address`, `taxable_amt`, `GST`, `Amount` ,`date_time`) VALUES ('$destination', '$room_name', '$no_rooms', '$no_days', '$check_in', '$check_out', '$fname', '$mname', '$lname', '$email', ' $phone', '$address',  0 ,0 , 0,  current_timestamp());";

    $result = mysqli_query($conn, $sql);

    if(!$result){
        echo "Failed to insert ---->".mysqli_error($conn);
    }
    else{
        echo '<div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Thank You!</h4>
            <p>Your room has been booked successfully. Kindly take the receipt by clicking on the print button below. </p>
            <hr>
            <p class="mb-0"><button type="button" class="btn btn-success" onclick="getPrint()">Print Receipt</button> </p>
            </div>';
    }
}
?>

<?php
//Setting time zone: 
date_default_timezone_set("Asia/Calcutta");   
?>
<body>
    <div class="main-container">

    <!-- hero section -->
    <div class="hero">
        <div class="logo">
            <img src="logo--Taj.png" alt="logo">
        </div>

        <div class="title">INVOICE</div>
    </div>


    <div class="address">
         <div class="add-customer">
            <?php 
            echo '<ul>
                <li>To,</li>
                <li>'.$fname.''.$lname.' </li>
                <li>'.$email.'</li>
                <li>'.$phone.'</li>
            </ul>';
            ?>
        </div>

        <div class="add-company">
            <h4>Taj</h4>
            <p> Date Issued:  <?php echo date('d/m/Y'); echo '&ensp;&ensp;'; echo '('.date('h:i:s').')' ; ?></p>
            <p>Invoice No: <?php  $invoice++; echo $invoice;?></p>
        </div>
     </div>


     <!-- Table Section -->


     <?php
        //Fetching Rates:
        $room_type = $_GET['room-type'];
        $sql = "SELECT * FROM `rooms` WHERE room_id='$room_type';";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $charges = $row['rates'];



    ?>

     <div class="description">

     <div class="desc-title-1">
        <h6>Room Type</h6>
        <h6>No of rooms</h6>
        <h6>Rate</h6>
        <h6>No of days</h6>
        <h6>GST %</h6>
        <h6>Sub Total</h6>
     </div>
        
     <div class="desc-content">
        <?php
        $GST = 18/100;
        $no_days = (int) $no_days;
        $no_rooms = (int) $no_rooms;
        $charges = (int) $charges;

        $taxableAmt = $no_rooms * $no_days * $charges;
        $taxableAmt = (int) $taxableAmt;

        $GST_amt = ($taxableAmt * $GST);

        $grandTotal = $taxableAmt + $GST_amt;
        $grandTotal = (int) $grandTotal;

        echo mysqli_error($conn);
       echo ' <p> '.$room_name.'</p>
        <p>'.$no_rooms.'</p>
        <p>'.$charges.'</p>
        <p>'.$no_days.'</p>
        <p> 18 </p>
        <p>'.$grandTotal.'</p>'; 
        
        
        ?>
     
     </div>
        
    </div>

    <div class="grand-total">
        <h2>Grand Total</h2>
        <h2><?php echo $grandTotal?></h2>
    </div>
</div>


<footer>
    <div class="panel-01">
    <h5> Contact Info </h5>
    <h5>Contact for Booking</h5>
    <h5> Grand Total</h5>  
    </div>

    <div class="panel-2">
    <p>0987654321 <br>
    elegancetaj@gmail.com</p>  

    <p> 1-800-111-825 <br>
        resevation@taj.com
    </p>

    <h2>
    <?php echo $grandTotal?>
    </h2>
    </div>


    
</footer>
<div class="thank">
    <p><i class="fa-regular fa-heart"></i>  Thank You !</p>
</div>


<!-- Inserting Taxable Amt, GST and Grand Total to DB -->
<?php
$sql = "UPDATE `booking` SET `taxable_amt` = $taxableAmt, `GST` = $GST_amt, `Amount` = $grandTotal WHERE `booking`.`Sr.No` = $invoice";
$result = mysqli_query($conn, $sql);
if(!$result){
    die("Falied to insert Amount into DB.". mysqli_error($conn));
}
?>


    <script>
        function getPrint(){
            window.print();
        }
    </script>
</body>
</html>