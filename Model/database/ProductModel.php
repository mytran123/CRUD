<?php
include_once "database/DB.php";
include_once "BaseModel.php";

class ProductModel extends BaseModel
{
    protected $table = "products";

//    public function __construct()
//    {
//        $this->table = "products";
//        $db = new DB();
//        $this->dbConnect = $db->connect();
//    }
    public function create($data)
    {
        $sql = "INSERT INTO $this->table(`name`,`price`,`description`) VALUES(?,?,?)";
        $stmt = $this->dbConnect->prepare($sql); //chuan bi truy van
        $stmt->bindParam(1,$data["name"]);
        $stmt->bindParam(2,$data["price"]);
        $stmt->bindParam(3,$data["description"]);
        $stmt->execute(); //thuc thi
    }
}