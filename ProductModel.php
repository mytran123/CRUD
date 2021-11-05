<?php
include_once "DB.php";
class ProductModel
{
    private $table;
    private $dbConnect;

    public function __construct()
    {
        $this->table = "products";
        $db = new DB();
        $this->dbConnect = $db->connect();
    }

    public function getAll() //lay ra du lieu toan bang
    {
        $sql = "SELECT * FROM $this->table";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }

    public function getById($id) //lay ra du lieu trong bang
    {
        $sql = "SELECT * FROM $this->table WHERE id = $id";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetch();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id = :id";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":id",$id);
        $stmt->execute();
    }

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