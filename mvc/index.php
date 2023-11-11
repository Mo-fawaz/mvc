<?php
// public/index.php
require_once __DIR__ . '/app/controllers/UserController.php';
require_once __DIR__ .'/app/models/UserModel.php';
require_once __DIR__ .'/config/config.php';
require_once __DIR__ . '/lib/DB/MysqliDb.php';
$config = require 'config/config.php';
$db = new MysqliDb(
    $config['db_host'],
    $config['db_user'],
    $config['db_pass'],
    $config['db_name']
);
//hala madrid
$request=$_SERVER['REQUEST_URI'];
define('base_path','/mvc/');
use UserModel\usermodel;
$model = new UserModel($db);
use UserController\usercontroller;
$controller = new UserController($model);
switch ($request) 
{
    case base_path:
        $controller->index();
        break;
        case base_path.'add':
            $controller->addUser();
            break;
            case base_path.'edit?id='.$_GET['id']:
                $controller->updateUser();
                break;
                case base_path.'delete?id='.$_GET['id']:
                    $controller->deleteUser();
                    break;
                    
}
?>
