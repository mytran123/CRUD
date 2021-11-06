<?php
include_once "Model/CategoryModel.php";

class CaterogyController
{
    private $categoryModel;
    public function __construct()
    {
        $this->categoryModel = new ProductModel();
    }

    public function index()
    {
        $categories = $this->categogyModel->getAll();
        include_once "View/category-list.php";
    }
}