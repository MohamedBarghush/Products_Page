<?php
  include "Includes/dbh.ink.php";
  include "Includes/user.ink.php";
  include "Includes/addItem.ink.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <?php
        if(isset($_POST['sku'])) {
            $adder = new Add();
            $adder->AddProduct();
        }
    ?>
    <form id="product_form" method="POST">
        <h2 style="display:inline-block; margin-right: 43rem; font-family:Arial; font-size:1.5rem;"><b>Product Add</b></h2>
        <button type="submit" name="Save" onclick="validate(this);" id="AddButton" class="btn">SAVE</button>
        <button type="button" onclick="CancelAdd();" id="delete-product-btn" class="btn">CANCEL</button>
        <hr class="solid">
        <div class="container">
            <label>SKU</label>
            <input type="text" name="sku" id="sku">
        </div>
        <div class="container">
            <label>Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="container">
            <label>Price ($)</label>
            <input type="text" name="price" id="price">
        </div>
        <div class="container">
            <label>Type Switcher</label>
            <select id="productType" name="type">
                <option selected disabled style="display:none;"></option>
                <option id="DVD" value="DVD">DVD</option>
                <option id="Furniture" value="Furniture">Furniture</option>
                <option id="Book" value="Book">Book</option>
            </select>
        </div>
        <div id="dvdForm">
            <div class="container">
                <label>
                    Size (MB)
                </label>
                <div>
                    <input type="number" name="size" id="size" class="op" placeholder="0 mb">
                </div>
            </div>
        </div>
        <div id="furnitureForm">
            <div class="container">
                <label>
                    Height (CM)
                </label>
                <input type="number" name="height" id="height" class="op" placeholder="0 cm">
            </div>
            <div class="container">
                <label>
                    Width (CM)
                </label>
                <input type="number" name="width" id="width" class="op" placeholder="0 cm">
            </div>
            <div class="container">
                <label>
                    Length (CM)
                </label>
                <input type="number" name="length" id="length" class="op" placeholder="0 cm">
            </div>
        </div>
        <div id="bookForm">
            <div class="container">
                <label>
                    Weight (KG)
                </label>
                <input type="number" name="weight" id="weight" class="op" placeholder="0 kg">
            </div>
        </div>
        <div class="container">
            <diV id="discription"></div>
        </div>
    </form>
    <script src="app.js"></script>
</body>
</html>