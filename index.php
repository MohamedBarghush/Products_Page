<?php
  include_once("Includes/dbh.ink.php");
  include_once("Includes/product.ink.php");
  include_once("Includes/modify_product.ink.php");
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
    <button type="button" onclick="window.location.replace('add-product.php');" id="AddButton" class="btn">ADD</button>
    <button type="button" id="delete-product-btn" class="btn" name="mass-delete" value="MASS DELETE">MASS DELETE</button><br>
    <hr class="solid">
    <div class="grid-container">
        <?php
          $users = new Product();
          $users->ShowAllProducts();
        ?>
    </div>
    <hr class="solid">
    <div class="footer"><label>Scandiweb Test assignment</label></div>
    
    <script src="app.js">
      
    </script>
</body>
</html>