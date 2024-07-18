<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Dashboard.css" />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <title>Taj | Dashboard</title>
  </head>
  <body>
    <div class="main-container">
      <div class="menu">
        <?php include "partials/_dbconnect.php"; ?>
        <?php include "partials/Dashboard-menu.php"; ?>
      </div>

      <div class="content">
        <div class="search">
          <button class="search-btn">Search</button>
          <input
            type="text" name="search-text" class="search-text" id="search-text" placeholder="Enter Text" />
        </div>

        <div class="card-section">
          <!-- Bill Details -->

          <!-- Fetching Data from the DB -->
           <?php
                $invoice = $_GET['invoice'];
                $sql = "SELECT * FROM `booking` WHERE `Sr.No` = $invoice";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $fname = $row['fname'];
                $mname = $row['mname'];
                $lname = $row['lname'];
                $phone = $row['phone'];
                $email = $row['email'];
                $destination = $row['destination'];
                $room_type = $row['room_type'];
                $check_in = $row['check_in'];
                $check_out = $row['check_out'];
                $taxable_amt = $row['taxable_amt'];
                $GST = $row['GST'];
                $amount = $row['Amount'];
                $date_time = $row['date_time'];



           
           ?>

           <div class="bill">
           <center><h1> Taj</h1></center>                
                <hr>
                <br>
                <!-- Customer Details -->
                <h3>Customer Details</h3>
                <p><em><b>Customer Name :</b></em>       &nbsp; <?php echo $fname ." " .$mname." ".$lname; ?></p>
                <p><em><b>Address :</b></em>   &nbsp; Kolhapur  </p>
                <p><em><b>Phone :</b></em>    &nbsp;<?php echo $phone  ?></p>
                <p><em><b>Email :</b></em>   &nbsp; <?php echo $email  ?></p>
                <hr>
                <br>

                <!-- Booking Detalis -->
                <h3>Booking Detalis</h3>
                <p> <em><b>Invoice No :</em></b>         &nbsp; <?php echo $invoice  ?> </p>
                <p> <em><b>Destination :</b></em>        &nbsp;  <?php echo $destination  ?></p>
                <p> <em><b>Room Type : </b></em>         &nbsp; <?php echo $room_type  ?></p>
                <p><em><b>CheckIn :</b></em>              &nbsp; <?php echo $check_in  ?></p>
                <p><em><b>CheckOut :</b></em>                &nbsp; <?php echo $check_out  ?></p>
                <p><em><b>Base Amount :</b></em>             &nbsp; <?php echo $taxable_amt  ?> </p>
                <p><em><b>GST :</b></em>                     &nbsp; <?php echo $GST  ?></p>
                <p><em><b>Grand Total :</b></em>             &nbsp; <?php echo $amount  ?> </p>
                <br>
                <small>Booking Date / Time: &nbsp; <?php echo $date_time  ?> </small>
                <br>
                <br>
                <!-- Print Button -->
                 <button class="button">Print</button>
           </div>


        </div>

      </div>

    </div>

  </body>
</html>
