<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ip1 = 10;
        $ip2 = 3;

        echo "<hr> ".$ip1;
        $ip1 = $ip1 + 10;
        echo "<hr> ".$ip1;
        $ip1 += 10;
        echo "<hr> ".$ip1;
        $ip1 -= 10;
        echo "<hr> ".$ip1;
        $ip1 *= 10;
        echo "<hr> ".$ip1;
        $ip1 /= 10;
        echo "<hr> ".$ip1;
    ?>
</body>
</html>