<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signature Suite</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
     integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Luxuary Room .css">
</head>
<body>
 
<?php include "partials/_dbconnect.php"; ?>

<?php
$room_id = $_GET['room_id'];
$sql = "SELECT * FROM `rooms` WHERE room_id = $room_id ";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    $room_type = $row['room_type'];
    $desc_1 = $row['room_desc'];
    $desc_2 = $row['desc_2'];
    $size = $row['size'];
    $capacity = $row['capacity'];
    $adults = $row['adults'];
    $children = $row['children'];
    $feature = $row['feature'];
    $rates = $row['rates'];


echo '<div class="page">
        <h1>Guest Rooms</h1>
        <div class="img" style="background-image:url(room'.$room_id.'.jpg)"> </div>
        <div class="detail">
            <h1>'.$room_type.'</h1>
            <p>'.$desc_1.'</p>
        </div>
        <div class="table" >
            <div class="icon1"> 
                <div class="icon">
                    <i class="fa-solid fa-maximize"></i>
                    <p>'.$size.'</p>
                </div>
                <div class="icon">
                    <i class="fa-solid fa-bed"></i>
                    <p>King</p>
                </div>
                </div>
           

            <div class="icon2"> 
                <div class="icon">
                    <i class="fa-solid fa-user-group " ></i>
                    <p>Up to '.$capacity.' guests</p>
                   
                </div>
                <div class="icon">
                    <i class="fa-solid fa-wifi"></i>
                    <p>Inclusive WiFi</p>
                </div>
            </div>
        </div>
        <div class="table">
            <div class="icon">
                <i class="fa-regular fa-star"></i>
                <p>Unique suite offering a Rajasthani splendour</p>
               
            </div>
        </div>
        <div class="text">
            <div class="room-detail">
                <h3>ROOM DETAILS</h3>
                <p>'.$desc_2.'</p>
                <h3>SIZE</h3>
                <p>'.$size.'Sq Mt</p>
                <h3>SIGNATURE FEATURE</h3>
                <p>'.$feature.'</p>
                <h3>Occupancy Details</h3>
                <p>Up to '.$capacity.' guests. Max Adults:'.$adults.', Max Children:'.$children.'</p>
                <h3>Rates</h3>
                <p>'.$rates.' per day</p>
            </div>
            <div class="other-detail">
                <h3>OTHER CONVENIENCES</h3>
                <p>
                    24-hour in-room dining<br><br>
                    Premium Wi-Fi at nominal charge<br><br>
                    Inclusive newspapers<br><br>
                    Daily housekeeping & turndown service<br><br>
                    Tea-coffee maker<br><br>
                    Inclusive of WiFi<br><br>
                    Dual-line telephones with voicemail & data capabilities<br><br>
                    Choice of smoking & non-smoking rooms<br><br>
                    40-inch flat-screen TV with satellite programmes<br><br>
                    24-hour personalised butler service<br><br>
                    Bottles of mineral water.</p>
            </div>
        </div>
        <button class="btn">  <a href="Booking.php" style="text-decoration: none; color: black;">BOOK A STAY</a></button>
    </div>
</body>
</html>';
}
    
?>