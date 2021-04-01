<?php
session_start();
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include "_connect.php";

  // Step 2: (17 points) Insert the new 'supers' row into the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  if(isset($_POST['submit'])){
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $dob = $_POST['date_of_birth'];
    $alias = $_POST['alias'];
    $active = $_POST['active'];
    $hero = $_POST['hero'];

    $sql= mysqli_query($conn, "INSERT INTO supers(first_name, last_name, date_of_birth, alias, active, hero) VALUES ('$fname','$lname','$dob','$alias','$active','$hero')");
    // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
    // Ensure you store the messages into the $_SESSION
    // Ensure you exit after your redirect
    // CREATE YOUR ERROR HANDLING BELOW THIS LINE
    if($sql){
      $_SESSION['message']= '<div class="alert-success"> <strong>Successful !</strong>Record inserted. Redirecting to homepage. </div>';
    header("location: notification.php");
    }
    else{
      $_SESSION['message']= '<div class="alert-danger"> <strong>Unsuccessful !</strong> Insertion incomplete. Redirecting to home page. </div>';
      header("location: notification.php");
    }
  }
    
  // TOTAL POINTS POSSIBLE: 35
?>