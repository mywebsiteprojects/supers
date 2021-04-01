<?php
session_start();
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include "_connect.php";
  // Step 2: (20 points) Delete the existing 'supers' row from the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
    $delete = mysqli_query($conn, "DELETE FROM supers WHERE id='$id'");
  }
  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  if($delete){
    $_SESSION['message']= '<div class="alert-success"> <strong>Successful !</strong> Delete complete. Redirecting to home page. </div>';
    header("location: notification.php");
  }
  else{
    $_SESSION['message']= '<div class="alert-danger"> <strong>Unsuccessful !</strong> Delete incomplete. Redirecting to home page. </div>';
    header("location: notification.php");
  }

  
  // TOTAL POINTS POSSIBLE: 38
?>