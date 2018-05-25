<?php
require_once "models/Model.php";
require_once "models/User.php";
require_once "models/Order.php";
require_once "controllers/ordercontroler.php";
$order = new OrderController();
require_once "controllers/usercontroller.php";
$user = new UserController();
$user->template();

?>