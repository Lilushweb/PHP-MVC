
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор</title>
</head>
<body>
    <h1>Калькулятор Сложения</h1>
    <form method="post" action="index.php">
        <div>
            <input type="text" name="num1" placeholder="Число 1" required>
            <span>+</span>
            <input type="text" name="num2" placeholder="Число 2" required>
        </div>
        <button type="submit">Посчитать</button>
    </form>

    <?php if (isset($result)) : ?>
        <h2>Результат: <?= htmlspecialchars($result) ?></h2>
    <?php endif; ?>
</body>
</html>
