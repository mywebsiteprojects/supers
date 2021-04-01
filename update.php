<?php
  session_start();
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include "_connect.php";
  // Step 2: (20 points) Update the existing 'supers' row in the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
if(isset($_POST['update'])){
  $id = $_POST['id'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $dob = $_POST['date_of_birth'];
  $alias = $_POST['alias'];
  $active = $_POST['active'];
  $hero = $_POST['hero'];


  $update = mysqli_query($conn, "UPDATE supers SET first_name = '$first_name', last_name='$last_name',date_of_birth='$dob',alias='$alias',active='$active',hero='$hero', updated_at=now() WHERE id='$id'");

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  if($update){
    $_SESSION['message']= '<div class="alert-success"> <strong>Successful !</strong> Updation complete. Redirecting to home page. </div>';
    header("location: notification.php");
  }
  else{
    $_SESSION['message']= '<div class="alert-danger"> <strong>Unsuccessful !</strong> Updation incomplete. Redirecting to home page. </div>';
    header("location: notification.php");
  }

}
  // TOTAL POINTS POSSIBLE: 38
?>