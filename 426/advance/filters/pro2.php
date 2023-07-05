<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ip1 = "<h1>This is Simple Text</h1>";
        $ip1 = filter_var($ip1, FILTER_SANITIZE_STRING);
        echo $ip1;
    ?>
</body>
</html>