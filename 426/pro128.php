<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str1 = "Welcome to world of PHP strings with visual studio code";

        //$pattern = "/[abc]/i";
        //$pattern = "/[^abc]/i";
        //$pattern = "/\s/i";
        //$pattern = "/[a-p]/i";
        //$pattern = "/[W|w]/";
        //$pattern = "/t./i";
        //$pattern = "/t.../i";
        //$pattern = "/^W./i";
        //$pattern = "/e$/i";
        //$pattern = "/e\b/i";
        $pattern = "/\bw/i";

        var_dump(preg_replace($pattern, "O", $str1));
    ?>
</body>
</html>