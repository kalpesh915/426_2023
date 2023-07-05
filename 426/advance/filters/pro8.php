<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ip1 = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";
        
        if(filter_var($ip1, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === $ip1){
            echo "Valid Data";
        }else{
            echo "Invalid Data";
        }
    ?>
</body>
</html>