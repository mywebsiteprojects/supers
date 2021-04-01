<link rel="stylesheet" href="style.css">
<?php
  // Step 1: (1 point) Start your session
  // CREATE YOUR SESSION START BELOW THIS LINE
  session_start();

  // Step 2: (4) Redirect the user if they don't have a notification
  // CREATE YOUR REDIRECT LOGIC BELOW THIS LINE
  if(!isset($_SESSION['message'])){
    header("loaction: index.php");
  }
  if(isset($_SESSION['message'])){
  // Step 3: (5) Output the notification and clear it from the session (once it's outputted)
  // CREATE YOUR NOTIFICATION OUTPUT AND CLEAR BELOW THIS LINE
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    echo '<script>
    setTimeout(function(){location.href="index.php"} , 5000);   
  </script>';
  }
  // TOTAL POINTS POSSIBLE: 10

?>
