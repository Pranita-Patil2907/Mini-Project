<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Dashboard.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
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
                 <div class="card-set">
                    <div class="card-1" style="background-image: url(dashboard-card-1.jpeg);"> <div class="color"> <a href="Dashboard-card.php?target=destination">Destination</a></div> </div>

                    <div class="card-1"style="background-image: url(dashboard-card-2.jpeg);"> <div class="color"> <a href="Dashboard-card.php?target=rooms">Rooms</a> </div> </div>

                    <div class="card-1" style="background-image: url(dashboard-card-3.jpeg);"> <div class="color"><a href="Dashboard-card.php?target=booking"> Room Booking</a></div> </div>

                    <div class="card-1" style="background-image: url(dashboard-card-4.jpeg);"> <div class="color"><a href="Dashboard-card.php?target=customer"> Customers</a> </div> </div>
                    
                    <div class="card-1" style="background-image: url(dashboard-card-5.jpeg);"> <div class="color"><a href="Dashboard-card.php?target=awards"> Awards</a></div> </div>

                 </div>
            </div>
               
                 
                
            </div>

       
    </div>
    
</body>
</html>