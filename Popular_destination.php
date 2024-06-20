<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popular Destionation Goa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Pop-Desc-goa.css">


</head>
<body>

    <!-- Popular Destionation Goa -->

    <?php

        //  Nav Bar
         include "partials/_dbconnect.php";


        $dest_id  = $_GET['dest_id'];
        $sql = "SELECT * FROM `destination` WHERE dest_id = $dest_id; ";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)){
            $dest_name = $row['dest_name'];
            $resort_name = $row['resort_name'];
            $address = $row['address'];
            $phone = $row['phone'];
            $email = $row['email'];
            $about_1 =$row['about_1'];
            $about_2 = $row['about_2'];
            }

        
        
        ?>
        <br>

        <!-- Main Section -->
        <div class="Goa-main" style="background-image: url(main_<?php echo $dest_name?>.jpg); ">
        <?php include "partials/_header.php";  ?>
        <div class="msg" style="letter-spacing: 10px; font-size: 3rem;">
            <ul style="margin-top: 15px;">
                Where to go?  <br>
            <p style="text-align: center;"> <?php echo $dest_name?></p>
            </ul>
        </div>
            

        <div class="address" style=" margin-top: 7.5rem;">

            <h2><?php echo $resort_name?></h2>
            <p style=" margin-top: 5px;">  <?php echo $address?>

            </p>
            <span class="ph-mail">
            <p style="cursor: pointer; margin-top: 5px;" ><i class="fa-solid fa-phone"></i><?php echo $phone?></p>
            <p style="cursor: pointer;  margin-top: 2px;"><i class="fa-solid fa-envelope"></i> <?php echo $email?></p>
            </span>
        </div>
      </div>

      <!-- Semi Info Section -->

      <div class="dest-info">
            <div class="dest-title">
                <h1>About <?php echo $dest_name?></h1>
            </div>

            <div class="dest-para">
                <?php
                echo " <p> $about_1   <br><br><br> $about_2  </p>";
                 ?>
                </div>
        </div>

        <!-- Cards Section -->

        
        <!-- Title -->
        <div class="dect-cards">
            <div class="dect-cards-title">
            <h1>Recommended Experiences</h1>
            </div>
            


            <!-- Cards -->
            <div class="dect-cards-container">
            <?php
            $dest_id = $_GET['dest_id'];
            $sql = "SELECT * FROM `recommended_experiences` WHERE dest_id = $dest_id;";
            $result = mysqli_query($conn, $sql);
             $count =1;
            while($row = mysqli_fetch_assoc($result))
            {   
                $sql2 = "SELECT * FROM `destination` WHERE dest_id = $dest_id; ";
                $result2 = mysqli_query($conn, $sql2);

                if($row2 = mysqli_fetch_assoc($result2)){
                $exp_name = $row['exp_name'];
                $exp_desc = $row['exp_desc'];
                $dest_name = $row2['dest_name'];
                $map = $row2['map'];
            echo '
            <div class="dect-card1" >
            <div class="dest-card-img" style="background-image: url('.$dest_name.'_'.$count.'.jpeg);"></div>   
            <div class="dest-card-content">
                        <h2>'.$exp_name.'</h2>
                        <p>'.$exp_desc.'</p>
                </div>
            </div> ';
                }
                $count++;

        }
        ?>
        </div>

        <!-- Map Section -->
          <div class="map" style="margin-bottom: 15px; display: flex; align-items: center; justify-content: center;">
            <iframe src=" <?php echo $map ?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>

          

         <!--  Footer Section -->
         <?php include "partials/_footer.php"; ?>

      
</body>
</html>