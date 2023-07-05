<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ip1 = 110;
        
        if(filter_var($ip1, FILTER_VALIDATE_INT, array("options"=>array("min_range"=>0, "max_range"=>100))) === $ip1){
            echo "Valid Data";
        }else{
            echo "Invalid Data";
        }
    ?>
</body>
</html>