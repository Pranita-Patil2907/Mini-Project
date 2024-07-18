<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Dashboard.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


    <link rel="stylesheet" href="//cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
   
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
                <input type="text" name="search-text" class="search-text" id="search-text" placeholder="Enter Text">
            </div>

            <div class="card-section">
                 <!-- Default Cards -->
                 <div class="card-set table-content">

                    <?php

                    $target = $_GET['target'];
                    if($target == 'destination'){
                    echo '<table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>Sr. No</th>
                            <th>Dest_Name</th>
                            <th>Resort Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Actions</th>

                        </tr>
                        </thead>

                    <tbody>';

                    $sql = "SELECT * FROM `destination`";
                    $result = mysqli_query($conn, $sql);
                    $count = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        $dest_name = $row['dest_name'];
                        $resort_name = $row['resort_name'];
                        $address = $row['address'];
                        $phone = $row['phone'];
                        $email = $row['email'];
                        echo '<tr>
                            <td>'.++$count.'</td>
                            <td>'.$dest_name.'</td>
                            <td>'.$resort_name.'</td>
                            <td>'.$address.'</td>
                            <td>'.$phone.'</td>
                            <td>'.$email.'</td>   
                            <td> <button class="btn">Edit</button>  <button class="btn">Delete</button></td>   
                        </tr> ';
                    }
                    echo '</tbody>
                    </table>';
                }
                elseif($target == 'rooms')
                {
                    echo '<table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>Sr. No</th>
                            <th>Room type</th>
                            <th>Size</th>
                            <th>Capacity</th>
                            <th>Adults</th>
                            <th>Childres</th>
                            <th>Rates</th>
                            <th>Actions</th>

                        </tr>
                        </thead>

                    <tbody>';

                    $sql = "SELECT * FROM `rooms`";
                    $result = mysqli_query($conn, $sql);
                    $count = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        $room_type = $row['room_type'];
                        $size = $row['size'];
                        $capacity = $row['capacity'];
                        $adults = $row['adults'];
                        $childrens = $row['children'];
                        $rates = $row['rates'];                        
                        echo '<tr>
                            <td>'.++$count.'</td>
                            <td>'.$room_type.'</td>
                            <td>'.$size.'</td>
                            <td>'.$capacity.'</td>
                            <td>'.$adults.'</td>
                            <td>'.$childrens.'</td>
                            <td>'.$rates.'</td>    
                            <td> <button class="btn">Edit</button>  <button class="btn">Delete</button></td>   
                        </tr> ';
                    }
                    echo '</tbody>
                    </table>';

                }
                elseif($target == 'booking'){
                    echo '<table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>Invoice No</th>
                            <th>Name</th>
                            <th>Destination</th>
                            <th>Room Type</th>
                            <th>No of Days</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                    <tbody>';

                    $sql = "SELECT * FROM `booking`";
                    $result = mysqli_query($conn, $sql);
                    $count = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        $invoice = $row['Sr.No'];
                        $destination = $row['destination'];
                        $room_type = $row['room_type'];
                        $no_rooms = $row['no_rooms'];
                        $no_days = $row['no_days'];
                        $checkIn = $row['check_in'];
                        $checkOut = $row['check_out'];
                        $fname = $row['fname'];
                        $lname = $row['lname']; 
                        $phone = $row['phone'];
                        $email = $row['email'];
                        $date_time = $row['date_time'];

                        echo '<tr>
                            <td>'.$invoice.'</td>
                            <td>'.$fname.' '.$lname.'</td>
                            <td>'.$destination.'</td>
                            <td>'.$room_type.'</td>
                            <td>'.$no_days.'</td> 
                            <td>'.$phone.'</td>    
                         <td><button class="btn"> <a href="Booking-bill-details.php?invoice='.$invoice.' ">Show Details</a></button></td>   
                        </tr> ';
                    }
                    echo '</tbody>
                    </table>';
                }
                elseif($target == 'customer'){
                    echo '<table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>Sr. No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>User Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                    <tbody>';

                    $sql = "SELECT * FROM `contact_info`";
                    $result = mysqli_query($conn, $sql);
                    $count = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        $name = $row['Name'];
                        $email = $row['Email'];
                        $User_Message = $row['User Message'];

                        echo '<tr>
                            <td>'.++$count.'</td>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>    
                            <td>'.$User_Message.'</td>    
                            <td> <button class="btn">Edit</button>  <button class="btn">Delete</button></td>   
                        </tr> ';
                    }
                    echo '</tbody>
                    </table>';

                }
                else{
                    echo '<table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>Sr. No</th>
                            <th>Award</th>
                            <th>Year</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                    <tbody>';
                    $sql = "SELECT * FROM `awards`";
                    $result = mysqli_query($conn, $sql);
                    $count = 0;
                    while($row = mysqli_fetch_assoc($result)){
                        $award_desc = $row['award_desc'];
                        $Year = $row['Year'];
                        echo '<tr>
                            <td>'.++$count.'</td>
                            <td>'.$award_desc.'</td>
                            <td>'.$Year.'</td>    
                            <td> <button class="btn">Edit</button>  <button class="btn">Delete</button></td>   
                        </tr> ';
                    }
                    echo '</tbody>
                    </table>';

                }
                    ?>

                 </div>
            </div>

            </div>
    </div>

    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

    <script>
  let table = new DataTable('#myTable');
</script>
</body>
</html>