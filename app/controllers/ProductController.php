<?php
namespace App\Controllers;
require_once 'BaseController.php';
// require_once ("/../models/User.php");
require_once(__DIR__ . "/../../app/models/Product.php");
use App\Models\Product;


class ProductController extends BaseController
{
    public function index()
    {
        $products = Product::getAllProducts($this->conn);
        $this->render('product/index', compact('products'));
    }
    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $product = new Product();
            $product->setName_pro($_POST['name']);
            $product->setPrice($_POST['price']);
            $product->save($this->conn);
            header('Location: /darrebni/new-mvc/?action=product/index');
            exit;
        } else {
            $this->render('product/create');
        }
    }
    public function edit() {
       
        $id = $_GET['id'];
        $product = Product::getProductById($this->conn, $id);
        $this->render('product/edit', compact('product'));
    }
    public function update() {
        $id = $_POST['id'];
        $product = Product::getProductById($this->conn, $id);
        $product->setName_pro($_POST['name']);
        $product->setPrice($_POST['price']);
        $product->save($this->conn);
        header('Location:/darrebni/new-mvc/?action=product/index');
        exit;
    }
    public function delete(){
        if (isset($_POST['delete'])) {
            $id=$_POST['id'];
        $product = Product::getProductById($this->conn, $id);
        $product->delete($this->conn);
        header('Location:/darrebni/new-mvc/?action=product/index');
        exit;
    }elseif(isset($_POST['no'])){
        header('Location:/darrebni/new-mvc/?action=product/index');
        exit;
    }else{
        $id = $_GET['id'];
        $product = Product::getProductById($this->conn, $id);
            $this->render('product/delete', compact('product'));
        }
}
}
