<?php
include_once "Model/ProductModel.php";

class ProductController
{
    private $productModel;
    public function __construct()
    {
        $this->productModel = new ProductModel();
    }

    public function index()
    {
        $products = $this->productModel->getAll();
        include_once "View/product-list.php";
    }

    public function showFormCreate()
    {
        include_once "View/product-create.php";
    }

    public function create($data)
    {
        $data2 = [
            "name" => $data['name'],
            "price" => $data['price'],
            "description" =>$data['desc']
        ];
        $this->productModel->create($data2);
        header("location:index.php");
    }
}