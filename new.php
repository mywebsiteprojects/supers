<!-- Step 1: (2 points) Include your header here -->
<?php include "_header.php"; ?>

<!-- Step 2: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<a href="index.php" class="button">Back to home</a><br>

<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<div class="container">

    <form action="insert.php" method="post">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name">
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name">
        <label for="date_of_birth">Date of Birth</label>
        <input type="date" id="date_of_birth" name="date_of_birth">
        <label for="alias">Alias</label>
        <input type="text" id="alias" name="alias">
        <label for="active">Active</label>
        <select type="text" id="active" name="active">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
        <label for="hero">Hero</label>
        <input type="text" id="hero" name="hero">
        <button class="button" name="submit" type="submit">Submit</button>
    </form>

</div>

<!-- Step 5: (2 points) Include your footer here -->
<?php include "_footer.php"; ?>


<!-- TOTAL POINTS POSSIBLE: 24 -->