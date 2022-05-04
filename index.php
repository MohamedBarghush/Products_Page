<?php
  include "Includes/dbh.ink.php";
  include "Includes/user.ink.php";
  include "Includes/viewUser.ink.php";
  include "Includes/deleteItem.ink.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Page</title>
</head>
<body>
    <?php
        $deleter = new DeleteItem();
        if (isset($_POST['mass-delete'])) {
            $arr = explode("-", $_POST['mass-delete']);
            foreach ($arr as $item) {
                $deleter->delete($item, "products");
            }
        }
    ?>
    <button type="button" onclick="window.location.replace('add-product.php');" id="AddButton" class="btn">ADD</button>
    <form method="POST" style="display:inline-block;"><input type="submit" id="delete-product-btn" class="btn" name="mass-delete" value="MASS DELETE"></form><br>
    <hr class="solid">
    <div class="grid-container">
        <?php
          $users = new ViewProduct();
          $users->ShowAllProducts();
        ?>
    </div>
    <hr class="solid">
    <div class="footer"><label>Scandiweb Test assignment</label></div>
    <script src="app.js">
      
    </script>
</body>
</html>
