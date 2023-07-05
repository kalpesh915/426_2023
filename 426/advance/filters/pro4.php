<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ip1 = "192.168.10.422"; // 0 to 255

        if(filter_var($ip1, FILTER_VALIDATE_IP) === $ip1){
            echo "Valid Data";
        }else{
            echo "Invalid Data";
        }
    ?>
</body>
</html>