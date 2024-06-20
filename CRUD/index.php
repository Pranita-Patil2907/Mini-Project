<?php
// INSERT INTO `notes` (`Sr.No`, `Title`, `Description`, `tstamp`) VALUES ('1', 'Hello', 'Hey Pranita...! \r\n', current_timestamp());

$insert = false;

// Connect to the DB:
$servername= "localhost";
$username= "root";
$password= "";
$database= "CRUD";

// Create a Connection:
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection not successfull.
if(!$conn){
  die("Sorry we are failed to connect: ". mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD']=='POST')
{
  $title = $_POST["title"];
  $description = $_POST["description"];

  $sql="INSERT INTO `notes` (`Title`, `Description`,`tstamp`) VALUES ('$title', '$description', current_timestamp());";
  
  $result=mysqli_query($conn, $sql);


  
  if(!$result){
    die("Your Entry has <b> Not </b> been submited succedssfully-->".mysqli_error($conn));
    }
    else{
    // echo '<div class="alert alert-success" role="alert">
    // Thank You for reaching out to us...!  </div> '; 

    $insert = true;
    }


}
?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="//cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
   
  <title>iNOtes - Notes Taking made easy </title>
  <script></script>
</head>

<body>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
  Edit  Modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  <!-- Nav Bar -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">iNotes</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>


        </ul>
        <form class="d-flex" >
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

    <?php
      
      if($insert){
        echo " <div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div> ";
      }
    ?>

    <div class="container my-4">
    <h2>Add a Note</h2>
    <form action="/CRUD/index.php" method="POST">
      <div class="mb-3">
        <label for="title" class="form-label">Note Title</label>
        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
      </div>

      <div class="form-group my-3">
    <label for="exampleFormControlTextarea1"> Note Description</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>
      <button type="submit" class="btn btn-primary">Add Note</button>
    </form>
  </div>


  <div class="container my-4">
   <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">Sr.No</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>

      <?php

          $sql= "SELECT * FROM `notes`";
          $result= mysqli_query($conn, $sql);
          $sno = 0;
          while($row = mysqli_fetch_assoc($result))
          {
            $sno =  $sno +1;
            echo "<tr>
            <th scope='row'>" .$sno ."</th>
            <td>" .$row['Title'] ."</td>
            <td>" .$row['Description'] ."</td>
            <td> <a class='edit' href ='/Edit'>Edit</a> <a href ='/Delete'>Delete</a>
            </td>
          </tr>";
            
          }

      ?>
  </tbody>
    </table>

  </div>


<hr>





  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
   

    <script src="//cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>

<script>
  let table = new DataTable('#myTable');
</script>

</body>

</html>