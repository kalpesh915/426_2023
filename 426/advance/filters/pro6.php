<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ip1 = "https://www.gmail.com";
        $ip1 = filter_var($ip1, FILTER_SANITIZE_STRING);
        if(filter_var($ip1, FILTER_VALIDATE_URL) === $ip1){
            echo "Valid Data";
        }else{
            echo "Invalid Data";
        }
    ?>
</body>
</html>