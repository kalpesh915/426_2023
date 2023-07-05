<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ip1 = "Welcome ╞æ╣▓⌐├═";
        
        $ip1 = filter_var($ip1, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        echo $ip1;
    ?>
</body>
</html>