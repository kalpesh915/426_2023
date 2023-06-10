<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
             //0123456789012345678901234567890
        $ip = "welcome to world of PHP Strings";
        echo "<hr> $ip";
        echo "<hr> ".strlen($ip);
        echo "<hr> ".str_word_count($ip);
        echo "<hr> ".ucfirst($ip);
        echo "<hr> ".strrev($ip);
        echo "<hr> ".strtoupper($ip);
        echo "<hr> ".strtolower($ip);
        echo "<hr> ".strpos($ip, "o");
        echo "<hr> ".strpos($ip, "o", 15);
        echo "<hr> ".str_replace("o", "O", $ip);
        echo "<hr> ".str_replace("o", "O", $ip, $count);
        echo "Total Replace of o to O is $count <hr>";
    ?>
</body>
</html>