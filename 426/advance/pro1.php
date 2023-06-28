<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<hr> Current timezone is ".date_default_timezone_get();
        date_default_timezone_set("Asia/Kolkata");
        echo "<hr> Current timezone is ".date_default_timezone_get();
        echo "<hr>".date("d/m/Y l h:i:s a");
    ?>
</body>
</html>