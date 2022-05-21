<?php
include_once("Includes/dbh.ink.php");
include_once("Includes/product.ink.php");
include_once("Includes/modify_product.ink.php");

$deleter = new Modify();
$result = false;
if (isset($_GET['mass-delete'])) {
    $arr = explode("-", $_GET['mass-delete']);
    foreach ($arr as $item) {
        $deleter->delete($item, "products");
    }
    echo '<script>window.location.replace("index.php");</script>';
}
// if ($result) {
//  	header("Location:index.php");
//      echo "<script>window.location.replace(\"https://mbproductspage.000webhostapp.com/\");</script>";
// }
?>