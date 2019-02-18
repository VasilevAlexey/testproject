<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<h3>Вход на сайт</h3>
<form action="calculation" method="POST">
    a: <input type="text" name="a" /><br><br>
    b: <input type="text" name="b" /><br><br>
    <input type="submit" value="Войти">
</form>
<?php

require_once 'CalculationApi.php';

try {
    $api = new calculationApi();
    echo $api->run();
} catch (Exception $e) {
    echo json_encode(Array('error' => $e->getMessage()));
} ?>
</body>
</html>
