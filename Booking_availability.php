<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booooook</title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols
    +Rounded:opsz,wght,FILL,GRAD@48, 400,0,0"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons.css"  rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>
    <link rel="stylesheet" href="Book_a_Stay.css">
</head>
<body>
    <div class="book-main">


    
        <!-- Nav Bar-->
        <nav class="nav-bar">

        <div class="logo"> </div>

        <!-- Search Bar -->
        <div class="search">
            <div class="search-logo">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        <input class="search-input" type="text" placeholder="Search ">
        </div>
       

        <!-- Nav Pages -->
        <div class="nav-pages">

            <div class="nav-box1 border1">
                <a href="index.html" target="_blank"> Home </a>
            </div>
    
            <div class="nav-box2 border1">
                <a href="Dining.html" target="_blank" > Dinning </a>
            </div>
    
            <div class="nav-box3 border1">
                <a href="mainroom.html" target="_blank"> Rooms </a>
            </div>
    
            <div class="nav-box4 border1">
                <a href="gallary.html" target="_blank"> Gallery </a>
            </div>
    
            <div class="nav-box5 border1">
                <a href="contact.php" target="_blank"> Contact </a>
            </div>

        </div>

        <div class="btn">
        <button class="btn-stay">  <a href="Booking.php" style="text-decoration: none; color: black;">BOOK A STAY</a></button>
        </div>
        
        </nav>


        <!-- Form section -->

        <div class="form_section">

            <div class="booking_form">
                <form action ="Booking.php" method ="POST" >
                
                <legend> Choose Hotel:</legend>
                <select name="destination" style="font-size: 12px">
                    <option  name="" value = ""> Choose Your Favourite Destination</option>
                    <option  name="destination"  value="Taj Fort Aguada Resort & Spa, Goa"> Taj Fort AguadaResort & Spa, Goa</option>
                    <option  name="destination"  value="The Taj Mahal Palace, Mumbai">The Taj Mahal Palace Mumbai</option>
                    <option  name="destination"  value="Taj Hotels in Jaipur">Taj Hotels in Jaipur</option>
                    <option  name="destination"  value="Taj Bengal, Kolkata">Taj Bengal, Kolkata</option>
                    <option  name="destination"  value="Taj Palace New Delhi">Taj Palace New Delhi</option>
                    <option  name="destination"  value="Taj Coromandel, Chennai">Taj Coromandel, Chennai</option>
                    <option  name="destination"  value="Vivanta by Taj - Blue Diamond, Pune">Vivanta by Taj -Blue Diamond, Pune</option>
                    <option  name="destination"  value="Taj Deccan, Hyderabad">Taj Deccan, Hyderabad</option>

                </select>
                <br>

                <div class="sections">
                <div class="section1">

                        Room Type: <br>
                        <select name="room" class="room-type" style="font-size: 12px">
                            <option  name="room"   value=""> Choose a Room Type</option>
                            <option  name="room"   value="Signature Suite"> Signature Suite</option>
                            <option  name="room"  value="Delux Room"> Delux Room</option>
                            <option  name="room"  value="Luxury Room"> Luxury Room</option>
                            <option  name="room"  value="Taj Clube Room">Taj Club Room</option>
                        </select>
                        <br>

                        From: <br>
                        <input type="date"  name="check_in">
                        <br>

                        To: <br>
                        <input type="date"  name="check_out">
                        <br>
                </div>

                <div class="section2">

                        No. of Rooms: <br>
                        <input type="number" placeholder="No. of Rooms" name="no_rooms">
                        <br>

                        Adults: <br>
                        <input type="number" placeholder="No. of adults" name="Adults">
                        <br>

                        Child: <br>
                        <input type="number" placeholder="No. of children" name="Children">
                        <br>
                </div>
                </div>
             <div class="buttons">
                <button class="ava-btn availability">Check availability </button>  
              <input type="submit" name="submit" value="Book Now" class="book-btn">
            </div>
            
            </form>
            </div>

        </div>
    </div>


     <!--  Footer Section -->
     <footer>

<!-- Panel 1 -->
<div class="foot-logo">
<img src="logo--Taj.png" alt="Taj Logo">
</div>

<!-- Panel 2 -->

<div class="foot-panel2">
    <div class="contact">
        <div class="contact-content">
            <i class="fa-solid fa-phone" style="font-size: 20px;"></i>
            <p style="margin-top:12px ;">8625936135</p>
        </div>
         
        <div class="contact-content mail">
            <i class="fa-regular fa-envelope"></i>
            <p>patilpranita410@gmail.com</p>
        </div>

    </div>

    <div class="foot-list">
        <ul>
        <a href="index.html" target="_blank">Home</a>
        <a href="Dining.html" target="_blank">Dinning</a>
        <a href="mainroom.html" target="_blank">Rooms</a>
        <a href="gallary.html" target="_blank">Gallery </a>
        <a href="">Events</a>
        <a href="">Aminities</a>
    </ul>
    </div>

    <div class="social-media">
        <i class="fa-brands fa-facebook-f"></i>
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-twitter"></i>   
        <i class="fa-brands fa-telegram"></i>                 
    </div>
</div>

<!-- Panel 3 -->

<div class="copyright">
    Copyright 2024 © All right reserved.
</div>
</footer>

<script>
    const ava = document.querySelector(".availability")
    console.log(ava);

    const submit = document.querySelector(".book-btn");
    console.log(submit);



    
        connectDB = () => {
         <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $destination = $_POST['destination'];
                $room = $_POST['room'];
                $check_in = $_POST['check_in'];
                $check_out = $_POST['check_out'];
                $no_rooms = $_POST['no_rooms'];
                $Adult = $_POST['Adults'];
                $Children = $_POST['Children'];

                

                 //Connecting 
                 $servername="localhost";
                 $username="root";
                 $password="";
                 $database="dbforms";
 
                 $conn = mysqli_connect($servername, $username, $password, $database);
 
                 if(!$conn){
                 die("Sorry we are failed connect");
                 }
                 else{
                     echo "<div class='alert alert-success' role='alert'>
                      We are Successfully Connected...! </div>";
                 }
            }
        ?>
        };

        ava.addEventListener("click", ()=>{
            connectDB();
        });
        
</script>
</body>
</html>