                                   <!-- || SHRI RAM SAMARTH || -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management Project</title>

    <!-- Bootstrap Links -->
     <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
     ">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols
    +Rounded:opsz,wght,FILL,GRAD@48, 400,0,0"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons.css"  rel="stylesheet">

    <link rel="stylesheet" href="style.css">
     <script src="script.js" defer></script>
</head>
<body>
   

    <!-- Insertiing User_feedback to DB -->
    <?php
    include "partials/_dbconnect.php";
    $method = $_SERVER['REQUEST_METHOD'];
    if($method == "POST"){
        $user_name = $_POST['user_name'];
        $feedback = $_POST['feedback'];

        $sql = "INSERT INTO `testimonial` (`user_name`, `user_feedback`, `date_time`) VALUES ('$user_name', '$feedback', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        if(!$result){
            echo ' Error ---->'. mysqli_error($conn);
        }
    }
 ?>
 <div class="main">

    <?php include "partials/_header.php"; ?>
           <!-- Nav Bar-->     <br>

        <!-- Main Section -->
   
        <div class="msg">
            SPEND QUALITY HOLIDAYS
            WITH US
        </div>

        <div class="address">

            <h2>Hotel Taj</h2>
            <p> Apollo Bunder Road, Colaba, Mumbai, Maharashtra 400001</p>
            <span class="ph-mail">
            <p><i class="fa-solid fa-phone"></i>  0987654321</p>
            <p><i class="fa-solid fa-envelope"></i>  elegance@tajhotels.com</p>
            </span>
        </div>
        <!-- </div> -->
  
    </div>

    <div class="semi-info new-para">
        <div class="semi-info-title">
            <h2>About Taj</h2>
        </div>
        <div class="semi-info-para">
            <p>Taj, India’s Strongest Brand across industries and sectors*, is an iconic hospitality brand from the Indian Hotels Company Limited. The brand continues to be one of the most revered and loved hospitality brands with a legacy of over 116 years of impeccable service and genuine warmth. Embodying the spirit of “Tajness”, authentic original palaces, landmark hotels, idyllic resorts and natural safari lodges interpret the tradition of hospitality in a refreshingly modern way to create unique experiences and lifelong memories.</p>
       </div>
    </div>

    
    <!-- Popular Destination -->
    <!-- Boxes -->

    <div class="des">

<div class="destination">
    <p>Popular Destination</p>
</div>
<?php 
    $sql = "SELECT * FROM `destination` ";
    $result= mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $dest_id = $row['dest_id'];
       $dest_name = $row['dest_name']; 
      echo '<div class="box1 box">
    <div class="box-content">
         <h2> '.$dest_name.'</h2>
         <div class="bg_img" style= "background-image: url(\''.$dest_name.'.jpg\');"></div>
        <a href="Popular_destination.php?dest_id='.$dest_id.'"> View Details</a>
    </div> 
</div>';
        
    }
?>
</div> 


        <!-- Slider section -->
        <div class="fit-container">
            <div class="fit-title">
            Fitness & Spa
            </div>
        
            <div class="container">
                    <div class="slider-wraper">
                        <button  id="prev-slide" class="material-icons slide-button"><i class="fa-solid fa-chevron-left" style="font-size: 2rem;"></i></button>

                        <div class="img-list">
                            <img src="Fitness/fit 1.jpg" alt="img-1" class="img-item">
                            <img src="Fitness/Pool 1.webp" alt="img-2" class="img-item">
                            <img src="Fitness/fit 5.jfif" alt="img-3" class="img-item">
                            <img src="Fitness/fit 3.jpeg" alt="img-4" class="img-item">
                            <img src="Fitness/pool 2.jpg" alt="img-5" class="img-item">
                            <img src="Fitness/fit 4.jfif" alt="img-6" class="img-item">
                            <img src="Fitness/Pool 3.jpg" alt="omg-7" class="img-item">
                            <img src="Fitness/pool 4.jpg" alt="img-8" class="img-item">
                            <img src="Fitness/fit 2.jpg" alt="img-9" class="img-item">
                            <img src="Fitness/fit 6.jfif" alt="img-10" class="img-item">
                        </div>

                        <button  id="next-slide" class="material-icons slide-button"><i class="fa-solid fa-chevron-right" style="font-size: 2rem;" ></i></button>

                    </div>
                </div>
        <!-- </div> -->

        <!--  Awards Section -->
        <div class="Awards">
            <div class="Awards-title">
                <h2> Awards</h2>
            </div>

            <div class="Awards-content">
            <?php
            $sql = "SELECT * FROM `Awards` ";
            $result= mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $award_desc = $row['award_desc'];
                echo ' <div class="A1">
                    <i class="fa-solid fa-award"></i> 
                    <h3>'.$award_desc.'</h3>            
               </div>';
            }
         ?>
          </div>
        </div>

        <!-- Reviews -->
        <div class="review-main">
         <div class="review-title"> Review & Testimonial</div>
            <div class="reviews">
                
            <?php
            $sql = "SELECT * FROM `testimonial` LIMIT 3";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result)){
                $user_name = $row['user_name'];
                $user_feedback = $row['user_feedback'];
                echo '<div class="review-1 R">  
                    <p> " '.$user_feedback.' " </p> 
                    <br>
                    <p> <em>- '.$user_name.' </em></p>
                </div>';
}
                        
            ?>
            </div>

            <!-- Insertiing User_feedback to DB -->
            <div class="feedback">
            <h2> <em>Mention your feedback </em></h2>

            <form method="POST" action="index.php">
            <div class="input-area">
              <input type="text" name="user_name" class="que" placeholder="Enter your name">
                <textarea name="feedback" class="que" placeholder="Write message here..." ></textarea>
                <button type="submit" class="learn_more"> Submit</button>
            </div>
            </form>
        </div>
        </div>
        <!--  Footer Section -->
        <?php include "partials/_footer.php"; ?>        
</body>
</html>