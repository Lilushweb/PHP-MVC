<?php

require_once(__DIR__ . '/../models/User.php');

class CalculatorController
{
    public function calculate(int $num1, int $num2): int|string
    {
        if (is_numeric($num1) && is_numeric($num1)) {
            $calculator = new Calculator();
            return $calculator -> add((int)$num1, (int)$num2);
        }
        return "Ошибка ввода";

    }
}
