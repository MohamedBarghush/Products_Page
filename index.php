<?php
  include "Includes/dbh.ink.php";
  include "Includes/user.ink.php";
  include "Includes/viewUser.ink.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
</head>
<body>
    <button type="button" onclick="EnableEditForm()" id="AddButton" class="btn">ADD</button>
    <button type="button" onclick="MassDelete()" id="delete-product-btn" class="btn">MASS DELETE</button><br>
    <hr class="solid">
    <div class="grid-container">
        <?php
          $users = new ViewUser();
          $users->ShowAllUsers();
        ?>
    </div>
    <script src="app.js"></script>
</body>
</html>
