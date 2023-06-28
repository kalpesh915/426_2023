<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<hr>".$_SERVER["SERVER_NAME"];
        echo "<hr>".$_SERVER["PHP_SELF"];
        echo "<hr>".$_SERVER["HTTP_HOST"];
        //echo "<hr>".$_SERVER["HTTP_REFERER"];
        echo "<hr>".$_SERVER["HTTP_USER_AGENT"];
        echo "<hr>".$_SERVER["SCRIPT_NAME"];
        echo "<hr>".$_SERVER["SERVER_ADDR"];
        echo "<hr>".$_SERVER["GATEWAY_INTERFACE"];
        echo "<hr>".$_SERVER["REQUEST_METHOD"];
    ?>
</body>
</html>