<?php
/**
 * Created by PhpStorm.
 * User: tu
 * Date: 20/09/2018
 * Time: 17:57
 */

require __DIR__.'/../database/Database.php';

class Category
{
    public $conn;

    public function __construct()
    {
        $database = new Database();
        $this->conn = $database->connect('root', '123456@Abc', 'library_database');
    }

    public function getCategories()
    {
        $sql = "SELECT * FROM category ORDER BY id";
        $result = $this->conn->query($sql);
        $categories = $result->fetchAll(PDO::FETCH_ASSOC);
        return $categories;
    }

    public function insertCategory($nameCategory)
    {
        $sql = "INSERT INTO category (category_name) VALUE ('$nameCategory')";
        $this->conn->exec($sql);
    }

    public function getCategoryById($is)
    {
        $sql = "SELECT * FROM category WHERE id = $is";
        $result = $this->conn->query($sql);
        $data = $result->fetchAll(PDO::FETCH_ASSOC);
        return $data[0];
    }

    public function updateCategory($categoryId, $categoryName)
    {
        $sql = "UPDATE `category` SET `category_name` = '$categoryName' WHERE `id` = '$categoryId'";
        $this->conn->exec($sql);
    }

    public function deleteCategory($categoryId)
    {
        $sql = "DELETE FROM `category` WHERE `id` = '$categoryId'";
        $this->conn->exec($sql);
    }
}

