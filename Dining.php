<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dining</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="script.js" defer></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>


<div class="Dining-main">

    <!-- Nav Bar -->

     <?php include "partials/_header.php"?>
     <?php include "partials/_dbconnect.php"?>


        <div class="Dine-info">
            <h2>DINE@TAJ</h2>
            <h3>A FEAST OF INSPIRATIONAL DELIGHTS </h3>
            <span class="para">
            <p>Delight in a world where culinary excellence meets celebration, transforming each bite into a delectable journey and every gathering into a memory in the making. Our Dining Program redefines gourmet corporate dining, infusing inspiration into your experiences.</p>
            </span>
        </div>
        </div>

        <div class="semi-info">
            <div class="semi-info-title">
                <h2>Unique Dining</h2>
            </div>

            <div class="semi-info-para">
                <p>In our bid to deliver authentic, undiluted experiences, we've introduced a unique regional home style dining <br> experience. Always prepared with a local touch, the home-style cooking ensures that you maintain good<br> health throughout your stay. And at the same time it gives you the opportunity to dabble in the local delicacies.</p>
           </div>
        </div>

        <!-- Slider -->


        <div class="container">
            <div class="slider-wraper">
                <button  id="prev-slide" class="material-icons slide-button"><i class="fa-solid fa-chevron-left"  style="font-size: 1.8rem; margin-bottom: 15px;"></i></button>

                <div class="img-list">
                    <img src="Cuisine/food 8.jpg" alt="img-1" class="img-item">
                    <img src="Cuisine/food 2.jpg" alt="img-2" class="img-item">
                    <img src="Cuisine/food 3.jpg" alt="img-3" class="img-item">
                    <img src="Cuisine/food 4.jfif" alt="img-4" class="img-item">
                    <img src="Cuisine/food 5.jfif" alt="img-5" class="img-item">
                    <img src="Cuisine/food 6.jfif" alt="img-6" class="img-item">
                    <img src="Cuisine/food 10.jpg" alt="omg-7" class="img-item">
                    <img src="Cuisine/food 9.jpg" alt="img-8" class="img-item">
                    <img src="Cuisine/food 11.jpg" alt="img-9" class="img-item">
                    <img src="Cuisine/food 12.jfif" alt="img-10" class="img-item">
            
                </div>
                
                <button  id="next-slide" class="material-icons slide-button"><i class="fa-solid fa-chevron-right" style="font-size: 1.8rem; margin-bottom: 15px;"></i></button>
            </div>
        </div>

        <!-- Card Section -->
        <div class="card-section">

            <div class="sign-restro-title">
                <h1>Signature Restaurants</h1>
            </div>

            <!-- Cards -->

            <div class="sign-restro-container">
                <?php
                $sql = "SELECT * FROM `signature restaurants` ";
                $result = mysqli_query($conn, $sql);
                $count = 5;
                while($row = mysqli_fetch_assoc($result)){
                    $sign_title = $row['sign_title'];
                    $sign_desc = $row['sign_desc'];
                    echo ' <div class="card-1">
                    <div class="card1-img" style="background-image: url(Cuisine/card\ '.$count.'.jpeg);"></div>
                    <div class="card1-content">
                        <h3>'.$sign_title.'</h3>
                        <p>'.$sign_desc.'</p>
                    </div>
                </div>';
                $count = 2;
                }                
                ?>
                
                

                <!-- <div class="card-1">
                    <div class="card1-img" style="background-image: url(Cuisine/Card\ 2.jpeg);"></div>
                    <div class="card1-content">
                        <h3>House of Nomad</h3>
                        <p>A one of a kind gastro bar that offers a selection of skillfully designed cocktails coupled with delectable Sushi creations, small plates and wines from different regions of the world</p>
                    </div>
                </div> -->

            </div>

        </div>

        <!-- footer -->
        <?php include "partials/_footer.php"; ?>


        

        


      

</body>
</html>