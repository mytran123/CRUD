<?php
include_once "ProductModel.php";

$ProductModel = new ProductModel();

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if ($ProductModel->getById($id) !== null) {
        $product = $ProductModel->delete($id);
        header("location:index.php");
    }
}
