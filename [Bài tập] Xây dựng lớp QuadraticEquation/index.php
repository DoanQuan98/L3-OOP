<?php
include_once "QuadraticEquation.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="number" name="a" style="width: 20px">² +
    <input type="number" name="b" style="width: 20px"> +
    <input type="number" name="c" style="width: 20px"> =
    <button type="submit">Calculate</button>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $a = $_REQUEST['a'];
        $b = $_REQUEST['b'];
        $c = $_REQUEST['c'];
        $quad = new QuadraticEquation($a, $b, $c);
        $quad->calculator();
    }

    ?>
</form>
</body>
</html>
