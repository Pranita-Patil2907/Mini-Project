<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav Bar | Header</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols
    +Rounded:opsz,wght,FILL,GRAD@48, 400,0,0"> 
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons.css"  rel="stylesheet">
    
    <link rel="stylesheet" href="style.css"></head>
    
<body>
  <!-- Nav Bar-->
  <nav class="nav-bar">

<div class="logo"> </div>

<!-- Search Bar -->
<div >
<form action="partials/navigate_dest.php" method ="POST">

    <span class = search>
    <button type="submit" class="search-logo" style="padding: 5px;"><i class='fa-solid fa-magnifying-glass'></i> 
    </button>
    <select  name="destination" id="destination" class="search-input">
            <option name ="destination" value="NULL"> Search Your Favourite Destination</option>
            <option name ="destination" value="Goa"> Goa</option>
            <option name ="destination" value="Mumbai"> Mumbai</option>
            <option name ="destination" value="Jaipur"> Jaipur</option>
            <option name ="destination" value="Kolkata"> Kolkata</option>
            <option name ="destination" value="NewDelhi"> New Delhi</option>
            <option name ="destination" value="Chennai"> Chennai</option>
            <option name ="destination" value="Pune"> Pune</option>
            <option name ="destination" value="Hydrabad"> Hydrabad</option>
        </select>
    </span>
        
    </form>

</div>


<!-- Nav Pages -->
<div class="nav-pages">

    <div class="nav-box1 border1">
        <a href="index.php"> Home </a>
    </div>

    <div class="nav-box2 border1">
        <a href="Dining.php"  > Dinning </a>
    </div>

    <div class="nav-box3 border1">
        <a href="mainroom.php" > Rooms </a>
    </div>

    <div class="nav-box4 border1">
        <a href="gallery.php"> Gallery </a>
    </div>

    <div class="nav-box5 border1">
        <a href="contact.php"> Contact </a>
    </div>

</div>

<div class="btn">
    <button class="btn-stay">  <a href="Booking.php" style="text-decoration: none; color: black;">BOOK A STAY</a></button>
</div>

</nav>
    
</body>
</html>