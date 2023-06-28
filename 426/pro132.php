<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str1 = "Welcome to world of PHP strings with visual studio code oo oo ooo oooo";

        //$pattern = "/o{2}/";
        //$pattern = "/o{2,3}/";
        $pattern = "/o{3,}/";

        var_dump(preg_replace($pattern, "O", $str1));
    ?>
</body>
</html>