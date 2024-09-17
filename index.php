<?php


require(__DIR__ . "/controllers/UserController.php");

$controller = new CalculatorController();
$result = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'] ?? 0;
    $num2 = $_POST['num2'] ?? 0;
    $result = $controller  ->calculate($num1, $num2);
}

include(__DIR__ . '/views/user_view.php');
