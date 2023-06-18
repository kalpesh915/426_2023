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
        echo "<hr>value of \$ip1 is ".$ip1;
        $ip2 = $ip1++; // post

        echo "<hr> value of \$ip1 is $ip1 and \$ip2 is $ip2";
    ?>
</body>
</html>