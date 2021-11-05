<?php
include_once "ProductModel.php";

$ProductModel = new ProductModel();

$id = $_GET["id"];
$product = $ProductModel->getById($id);
echo "<pre>";
var_dump($product);