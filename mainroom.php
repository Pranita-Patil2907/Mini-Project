<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
     integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="mainroom.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
    
    <link rel="stylesheet" href="mainroom.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
         <!-- Nav Bar-->
         <?php include "partials/_header.php"?>
         <?php include "partials/_dbconnect.php"?>

            
        <div class="room-img">
            <p>Taj Exotica Resort, <br>Goa</p>
        </div>
    
   
    
       
    <div class="main-title">
       <h1> Guest Rooms</h1>
       <p>Discover the story behind every pillar of The Taj Mahal Palace, overlooking the epochal Gateway of India. The hotel’s 285 rooms and suites, in the Palace wing, blend old-world charm and modern facilities.  </p>
    </div>

    


    <div class="content">
        <div class="room-content">

            <!-- Fetching Rooms Data from DB -->

            <?php
                $sql = "SELECT * FROM `rooms` ";
                $result = mysqli_query($conn, $sql);
                $count =1;
                while($row = mysqli_fetch_assoc($result)){
                    $room_id = $row['room_id'];
                    $room_type= $row['room_type'];
                    $room_desc = $row['room_desc'];

                    echo '<div class="card1">
                <div class="img" style="background-image:url(room'.$count.'.jpg)"></div>
            <div class="desc">
                <h1> '.$room_type.'</h1>
                <p> '.$room_desc.'</p>
                <button> <a href="room_thread.php?room_id='.$count.'">View Details</a></button>
                </div>
        </div>';
        $count++;
                }
     
                ?>
                 
            
    </div>


            

    <!-- footer -->
    <?php include "partials/_footer.php"; ?>


</body>
</html>

    