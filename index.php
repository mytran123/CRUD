<?php
include_once "Controller/CaterogyController.php";
include_once "Controller/ProductController.php";

$productController = new ProductController();
$categoryController = new CaterogyController();
//$products = $productModel->getAll();
//var_dump($products);
//die();
$page = (isset($_GET["page"])?$_GET["page"] : "");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="navbar">
    <a href="index.php?page=product-list">Product</a>
    <a href="index.php?page=category-list">Category</a>
</div>
<?php
    switch ($page) {
        case "product-list":
            $productController->index();
            break;
        case "category-list":
            $categoryController->index();
            break;
        case "product-create":
            if ($_SERVER["REQUEST_METHOD"] == "GET") {
                //show form create
                $productController->showFormCreate();
            } else {
                //tao san pham
                $productController->create($_REQUEST);
            }
            break;
        default:
            $productController->index();
    }
?>
</body>
</html>
