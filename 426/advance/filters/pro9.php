<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ip1 = "https://www.google.com?fname=ganga";
        
        if(filter_var($ip1, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === $ip1){
            echo "Valid Data";
        }else{
            echo "Invalid Data";
        }
    ?>
</body>
</html>