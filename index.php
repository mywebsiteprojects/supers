<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
include "_connect.php";
  // Step 2: (5 points) Retrieve all the 'supers' rows from your database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $sql = mysqli_query($conn, "SELECT * FROM supers");
?>

<!-- Step 3: (2 points) Include your header here -->
<?php include "_header.php"; ?>

<!-- Step 4: (2 points) Create a navigation bar for home.php and new.php -->
<!-- CREATE YOUR NAVIGATION HTML BELOW THIS LINE -->
<div class="navbar">
    <a href="index.php" class="active">Home</a>
    <a href="new.php">New</a>
</div>
<!-- Step 5: (15 points) Create a table that display each row from the database -->
<!-- You only need to display the first_name, last_name, date_of_birth, -->
<!-- alias, active, and hero columns -->

<!-- Step 6: (6 points) Create action links pointing to 'edit.php' and 'delete.php' -->
<!-- Ensure there was one edit and delete link for each row -->

<!-- CREATE YOUR TABLE BELOW THIS LINE -->
<div class="container">
    <table>
        <tr>
            <th>
                First Name
            </th>
            <th>
                Last Name
            </th>
            <th>
                Date of Birth
            </th>
            <th>
                Alias
            </th>
            <th>
                Active
            </th>
            <th>
                Hero
            </th>
            <th>
                Operation
            </th>
        </tr>
        <?php
    while($data = mysqli_fetch_assoc($sql)){
      echo'<tr> <td>
      '.$data['first_name'].'
  </td>
  <td>
  '.$data['last_name'].'
  </td>
  <td>
  '.$data['date_of_birth'].'
  </td>
  <td>
  '.$data['alias'].'
  </td>
  <td>';
  if($data['active'] == 1){
    echo 'Yes';
  }
  else{
    echo 'No';
  }
  echo'</td>
  <td>
  '.$data['hero'].'
  </td>
  <td>
  <a href="edit.php?id='.$data['id'].'" class="button-sm">Edit</a>
  <a href="delete.php?id='.$data['id'].'" class="button-sm">Delete</a>
  </td> </tr>';
    }
    ?>


    </table>
</div>

<!-- Step 7: (2 points) Include your footer here -->
<?php include "_footer.php"; ?>


<!-- TOTAL POINTS POSSIBLE: 34 -->