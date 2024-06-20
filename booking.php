<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="Booking.css">
</head>
<body>
    <?php include "partials/_header.php";?>

<div class="main-container">

<form action="bill_Print.php" method="GET">
    <div class="main-img">
        <img src="main-room 7.jpeg" alt="main-img" class="_img">

        
        <select name="destination" style="font-size: 12px" class="book_destination" required>
                    <option  name=""   value=""> Choose Your Favourite Destination</option>
                    <option  name="destination"  value="Taj Fort Aguada Resort & Spa, Goa"> Taj Fort AguadaResort & Spa, Goa</option>
                    <option  name="destination"  value="The Taj Mahal Palace, Mumbai">The Taj Mahal Palace Mumbai</option>
                    <option  name="destination"  value="Taj Hotels in Jaipur">Taj Hotels in Jaipur</option>
                    <option  name="destination"  value="Taj Bengal, Kolkata">Taj Bengal, Kolkata</option>
                    <option  name="destination"  value="Taj Palace New Delhi">Taj Palace New Delhi</option>
                    <option  name="destination"  value="Taj Coromandel, Chennai">Taj Coromandel, Chennai</option>
                    <option  name="destination"  value="Vivanta by Taj - Blue Diamond, Pune">Vivanta by Taj -Blue Diamond, Pune</option>
                    <option  name="destination"  value="Taj Deccan, Hyderabad">Taj Deccan, Hyderabad</option>

        </select>

             <div class="grid-box">

                <div class="room-type">
                    <h3>Choose Room Type</h3>
                    <p>  <input type="radio" name="room-type" id="room1" value="1" required>  &nbsp; Signature  &nbsp;|&nbsp; 7000 Rs.</p>
                    <p> <input type="radio" name="room-type" id="room2" value="2" required>  &nbsp;Delux &nbsp;|&nbsp; 9000 Rs. </p>
                    <p> <input type="radio" name="room-type" id="room3" value="3" required> &nbsp;   Luxury &nbsp;|&nbsp; 10500 Rs. </p>
                    <p> <input type="radio" name="room-type" id="room4" value="4" required>   &nbsp; TajClub &nbsp;|&nbsp; 14000 Rs. </p>
                </div>

                <div class="staying-details">

                        <div class="no-rooms">
                            <h3> No of Rooms</h3>
                            <input type="number" name="no_rooms" id="" placeholder="No. of rooms" min="1"  required>
                        </div>

                        <div class="no-days">
                            <h3>No of Days</h3>
                            <input type="number" name="no_days" id="" placeholder="No. of rooms" min="1" required>
                        </div>

                        <div class="check-in">
                            <h3>Check In</h3>
                            <input type="date" name="check_in" id="" placeholder="Date" min="<?php echo date('Y-m-d');?>" required>
                        </div>

                        <div class="check-out">
                            <h3>Check Out</h3>
                            <input type="date" name="check_out" id="" min="<?php echo date('Y-m-d');?>" required>
                        </div>
            </div>
</div>







            <!-- Personal Details -->

            <div class="personal-details">
                <h2>Personal Details</h2>

                <div class="cust-name">
                    <input type="text" name="fname" id="" placeholder="First Name" required>
                    <input type="text" name="mname" id="" placeholder="Middle Name" required>
                    <input type="text" name="lname" id="" placeholder="Last Name"required>
                </div>

                <div class="contact">
                    <input type="email" name="email" id="" placeholder="Email" required>
                    <input type="tel" name="phone" id="" placeholder="Phone" maxlength="10" required>
                </div>
            </div>

            <div class="buttons">
            <button type="submit" name="submit" class="book-btn">Book Now</button> 
            </div>



    </div>
    </form>



 </div>
    


    <?php include "partials/_footer.php";?>
</body>
</html>