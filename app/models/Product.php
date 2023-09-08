<?php
namespace App\Models;
class Product extends Model {
    private  $name_product,$price;
   

    public function getName_pro() {
        return $this->name_product;
    }

    public function setName_pro($name_product) {
        $this->name_product = $name_product;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public static function getAllProducts($conn) {
        $query = "SELECT * FROM products";
        $result = mysqli_query($conn, $query);
        $products = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $product = new Product();
            $product->id = $row['id'];
            $product->setName_pro($row['name_product']);
            $product->setPrice($row['price']);
            $products[] = $product;
        }
        return $products;
    }

    public static function getProductById($conn, $id) {
        $query = "SELECT * FROM products WHERE id = $id";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);
        $product = new Product();
        $product->id = $row['id'];
        $product->setName_pro($row['name_product']);
        $product->setPrice($row['price']);
        return $product;
    }

    public function save($conn) {
        if ($this->id) {
            $query = "UPDATE products SET name_product = '$this->name_product', price = '$this->price' WHERE id = ' $this->id'";
            $stmt = mysqli_query($conn, $query);

        } else {
            $query = "INSERT INTO products (name_product, price) VALUES ('$this->name_product','$this->price')";
            $stmt = mysqli_query($conn, $query);
            
            $this->id = mysqli_insert_id($conn);
        }
    }

    public function delete($conn) {
        $query = "DELETE FROM products WHERE id = '$this->id' ";
        $stmt = mysqli_query($conn, $query);
       
    }
}