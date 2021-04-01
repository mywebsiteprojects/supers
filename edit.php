<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
include "_connect.php";
  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  if(isset($_GET['id']))
  {
    $id = $_GET['id'];
    $fetch = mysqli_query($conn, "SELECT * FROM supers WHERE id='$id'");
  }
?>

<!-- Step 3: (2 points) Include your header here -->
<?php include "_header.php"; ?>
<!-- Step 4: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<a href="index.php" class="button">Back to home</a><br>
<!-- Step 5: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->

<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->

<div class="container">

    <?php 
    while($data=mysqli_fetch_assoc($fetch)){
    echo '<form action="update.php" method="post">
    <input type="text" id="id" name="id" value="'.$data['id'].'" hidden>
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="'.$data['first_name'].'">
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="'.$data['last_name'].'">
        <label for="date_of_birth">Date of Birth</label>
        <input type="date" id="date_of_birth" name="date_of_birth" value="'.$data['date_of_birth'].'">
        <label for="alias">Alias</label>
        <input type="text" id="alias" name="alias" value="'.$data['alias'].'">
        <label for="active">Active</label>
        <select type="text" id="active" name="active" value="'.$data['active'].'">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        <label for="hero">Hero</label>
        <input type="text" id="hero" name="hero" value="'.$data['hero'].'">
        <button class="button" name="update" type="submit">Update</button>
    </form>';
    }
    ?>
</div>

<!-- Step 8: (2 points) Include your footer here -->
<?php include "_footer.php"; ?>

<!-- TOTAL POINTS POSSIBLE: 44 -->