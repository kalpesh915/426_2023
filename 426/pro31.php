<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<hr> ".pi();
        echo "<hr> ".max(14, 58, 96, 47, 85, 44, 14, 54, 63);
        echo "<hr> ".min(14, 58, 96, 47, 85, 44, 14, 54, 63);
        echo "<hr> ".abs(-85);
        echo "<hr> ".sqrt(144);
        echo "<hr> ".round(1.44);
        echo "<hr> ".round(1.55);
        echo "<hr> ".rand();
        echo "<hr> ".rand(999, 9999);
        echo "<hr> ".base_convert("100", 16, 10);
        echo "<hr> ".ceil(14.5);
        echo "<hr> ".floor(14.9);
        echo "<hr> ".fmod(101, 4);
        echo "<hr> ".pow(2, 10);
    ?>
</body>
</html>