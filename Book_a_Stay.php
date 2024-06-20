<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Stay</title>

    
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


    <?php include "partials/_header.php";?>
    
       

        <!-- PHP Section -->

        <?php

                // Inserting Procedure:
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

                $conn=mysqli_connect($servername, $username, $password, $database);

                if(!$conn){
                die("Sorry we are failed connect");
                }
                // else{
                //     echo "We are Successfully connected<br>";
                // }


                // Inserting Data:

                $sql="INSERT INTO `book_a_stay` ( `Destination`, `Room`, `No.of Rooms`, `check-in`, `check-out`, `Childrean`, `Adults`) VALUES ( '$destination', '$room', '$no_rooms', '$check_in', '$check_out', '$Children', '$Adult');";

                $result=mysqli_query($conn, $sql);

                if(!$result){
                die("Your Entry has not been submited succedssfully-->".mysqli_error($conn));
                }
                else{
                echo '<div class="alert alert-success" role="alert">
                Thank You for reaching out to us...!  </div> '; 
                }

                }

        ?>

        <!-- Form section -->

        <div class="form_section">

            <div class="booking_form">
                <form  class="booking_form" action="Book_a_Stay.php" method="GET" >
                
                <legend> Choose Hotel:</legend>
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
                <br>

                <div class="sections">
                <div class="section1">

                        Room Type: <br>
                        <select name="room" class="room-type" style="font-size: 12px" required>
                            <option  name="room"   value=""> Choose a Room Type</option>
                            <option  name="room"   value="Signature Suite"> Signature Suite</option>
                            <option  name="room"  value="Delux Room"> Delux Room</option>
                            <option  name="room"  value="Luxury Room"> Luxury Room</option>
                            <option  name="room"  value="Taj Clube Room">Taj Club Room</option>
                        </select>
                        <br>

                        From: <br>
                        <input type="date"  name="check_in" required>
                        <br>

                        To: <br>
                        <input type="date"  name="check_out" required>
                        <br>
                </div>

                <div class="section2">

                        No. of Rooms: <br>
                        <input type="number" placeholder="No. of Rooms" name="no_rooms" required>
                        <br>

                        Adults: <br>
                        <input type="number" placeholder="No. of adults" name="Adults" required>
                        <br>

                        Child: <br>
                        <input type="number" placeholder="No. of children" name="Children" required>
                        <br>
                </div>
                </div>
             <div class="buttons">
            <!-- <button class="ava-btn availability">Check availability </button>   -->
              <!-- <input  href="bill_Print.php" type="submit" name="submit" value="Book Now" > -->
             <!-- <button type="submit" name="submit" class="book-btn">Book Now</button>  -->
             <a href="bill_Print.php"> <button type="submit" name="submit" class="book-btn">Print Receipt</button> </a> 
            </div>
            </form>
            </div>

        </div>
    </div>


     <!--  Footer Section -->
     <?php include "partials/_footer.php"; ?>




<script>
    let ava = document.querySelector(".availability");
    console.log(ava);

    // if(!$conn){
    //     die("You Bull Shit");
    // }

    

    const check_availibility =()=>{

        <?php

            $servername="localhost";
            $username="root";
            $password="";
            $database="rooms";

            $conn2=mysqli_connect($servername, $username, $password, $database);

            if(!$conn2){
            die("Sorry we are failed connect");
            }
           
           
            ?>
                            //     $sql2 ="SELECT `Available Rooms` FROM `check availability` WHERE `Branch` = '$destination ' AND `Room Type` = '$room';";
                            
                        //    $result2 = mysqli_query($conn2, $sql2);

                        //    if(!$result2){
                        //     echo " You Bullshit";
                        //    }
                    
    }

        ava.addEventListener("click", ()=>{
            check_availibility();
        });


          
   

   
</script>    
</body>
</html>