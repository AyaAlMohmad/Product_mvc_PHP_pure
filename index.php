<?php
require_once 'config/database.php';
require_once 'app/controllers/UserController.php';
require_once 'app/controllers/ProductController.php';

$controller = new App\Controllers\UserController($conn);
$controller1 = new App\Controllers\ProductController($conn);

$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'create':
        $controller->create();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'update':
        $controller->update();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'product/index':
        $controller1->index();
        break;
    case 'product/create':
        $controller1->create();
        break;
    case 'product/edit':
        $controller1->edit();
        break;
    case 'product/update':
        $controller1->update();
        break;
    case 'product/delete':
        $controller1->delete();
        break;
    default:
        $controller->index();
}
