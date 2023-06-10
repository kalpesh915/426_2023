<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<hr>";
        var_dump(is_finite(15.55));
        echo "<hr>";
        var_dump(is_finite(15.55e4852));
        echo "<hr>";
        var_dump(is_infinite(15.55e4852));
        echo "<hr>";
        var_dump(is_nan(123));
        echo "<hr>";
        var_dump(is_nan(123 / 10));
        echo "<hr>";
        var_dump(is_numeric("123"));
        echo "<hr>";
        var_dump(is_numeric("123ABC"));
    ?>
</body>
</html>