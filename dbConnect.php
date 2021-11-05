<?php
//$dsn = "mysql:host=localhost;dbname=shop-online;charset=utf8";
//$username = "root";
//$password = "";
//
//$conn = new PDO($dsn, $username, $password);
include_once "DB.php";

$dbConnect = new DB();

$sql = "SELECT * FROM products WHERE id = 1";
//$stmt = $conn->query($sql); //$result
$stmt = $dbConnect->connect()->query($sql);
$result = $stmt->fetchAll();

echo "<pre>";
var_dump($result); //tra ve mang 2 chieu va lay toan bo du lieu
die();             //fetch tra ve mang 1 chieu va se lay gia tri dau tien tuc la so 0 cua minh