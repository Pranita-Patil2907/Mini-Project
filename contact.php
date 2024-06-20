<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="contact.css">

    <style>
        .btn-print{
            height:20px;
            width: 20px;
        }
    </style>
</head>
<body>


    <!-- Nav Bar-->
    <nav class="nav-bar">

        <div class="logo"> </div>

        <!-- Search Bar -->
        <div class="search">
            <div class="search-logo">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        <input class="search-input" type="text" placeholder="Search your Favourite Destination">
        </div>
       

        <!-- Nav Pages -->
        <div class="nav-pages">

            <div class="nav-box1 border1">
                <a href="index.php"> Home </a>
            </div>
    
            <div class="nav-box2 border1">
                <a href="Dining.php"> Dinning </a>
            </div>
    
            <div class="nav-box3 border1">
                <a href="mainroom.php"> Rooms </a>
;            </div>
    
            <div class="nav-box4 border1">
                <a href="gallary.php"> Gallery </a>
            </div>
    
            <div class="nav-box5 border1">
                <a href="contact.php"> Contact </a>
            </div>

        </div>

        <div class="btn">
        <button class="btn-stay">  <a href="Booking.php" style="text-decoration: none; color: black;">BOOK A STAY</a></button>        </div>
        
        </nav>


         <!-- PHP -->

         <?php

// Inserting Procedure:
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$name = $_POST['name'];
$email = $_POST['email'];
$desc = $_POST['desc'];



//Connecting 
$servername="localhost";
$username="root";
$password="";
$database="dbforms";

$conn=mysqli_connect($servername, $username, $password, $database);

if(!$conn){
die("Sorry we are failed connect");
}
// else{
//     echo "We are Successfully connected<br>";
// }


// Inserting Data:

$sql="INSERT INTO `project form 1` (`Name`, `Email`, `User Message`) VALUES ('$name', '$email', '$desc')";

$result=mysqli_query($conn, $sql);

if(!$result){
die("Your Entry has not been submited succedssfullt-->".mysqli_error($conn));
}
else{
echo '<div class="alert alert-success" role="alert">
Thank You for reaching out to us...!  </div> '; 
}

}



?>

<section class="contact">

    <div class="content">
        <h2>Contact Us</h2>
        <p>Plese fill out the form below with your contact information and any inquiries or requests you may <br>
            have,and we'll get back to you as soon as possible.<br> Thank you for reaching out to us.
        </p>
    </div>
    <div class="container">
        <div class="contactinfo">
            <div class="box">
                <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                <div class="text">
                    <h3>Address:</h3>
                    <p>Apollo Bunder Road, Colaba, Mhurli Mumbai,  <br>Maharashtra <br>400001</p>
                </div>
            </div>
        
            <div class="box">
                <div class="icon"><i class="fa-solid fa-phone"></i></div>
                <div class="text">
                    <h3>Phone:</h3>
                    <p>0987654321</p>
                </div>
            </div>
    
            <div class="box">
                <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                <div class="text">
                    <h3>Email:</h3>
                    <p>elegance@tajhotels.com</p>
                </div>
            </div>

            <div class="box">
               
                
                <div class="icon"><i class="fa-brands fa-instagram"></i></div>
                <div class="icon"><i class="fa-brands fa-x-twitter"></i></i></div>
                <div class="icon"><i class="fa-brands fa-facebook-f"></i></div>
                <div class="icon"> <i class="fa-brands fa-telegram"></i></div>

                </div>
            </div>
        </div>
    </div>
    <div class="contactform">
        <form action="contact.php" method="POST">
            <h2>Send Message</h2>
            <div class="inputbox">
                <input type="text" name="name" required="required" placeholder="Full Name">
                <span></span>
            </div>
            <div class="inputbox">
                <input type="text" name="email" required="required" placeholder="Email">
                <span></span>
            </div>
            <div class="inputbox">
                <textarea required="required" name="desc" placeholder="Type your Message..."></textarea>
                <span></span>
            </div>
            <div class="inputbox">
                <input type="submit" name="" value="Send">
                <button type="button" class="btn-print" value="Print" onclick="getPrint()">Print</button>
            </div>
        </form>
    </div>
</section>

<footer>

    <!-- Panel 1 -->
    <div class="foot-logo">
    <img src="logo--Taj.png" alt="Taj Logo">
    </div>

    <!-- Panel 2 -->

    <div class="foot-panel2">
        <div class="contact1">
            <div class="contact-content">
                <i class="fa-solid fa-phone" style="font-size: 20px;"></i>
                <p style="margin-top:12px ;">0987654321</p>
            </div>
             
            <div class="contact-content mail">
                <i class="fa-regular fa-envelope"></i>
                <p>elegance@tajhotels.com</p>
            </div>

        </div>

        <div class="foot-list">
            <ul>
            <a href="index.html">Home</a>
            <a href="Dining.html">Dinning</a>
            <a href="mainroom.html">Rooms</a>
            <a href="gallary.html">Gallery </a>
            <a href="contact.php">Contact</a>
            <a href="Book_a_Stay.php">BookRoom</a>
        </ul>
        </div>

        <div class="social-media">
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-x-twitter"></i>
            <i class="fa-brands fa-telegram"></i>                 
        </div>
    </div>

    <!-- Panel 3 -->

    <div class="copyright">
        Copyright 2024 © All right reserved.
    </div>


</footer>
<script>
    function getPrint(){
        window.print();
    }

</script>
</body>
</html>