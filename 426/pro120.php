<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $ip1 = 10; //global
        $ip2 = 15; //global
        
        function msg(){
            //echo "Sum is ".($ip1 + $ip2);    
            echo "Sum is ".($GLOBALS["ip1"] + $GLOBALS["ip2"]);    
        }
        
        msg();
    ?>
</body>
</html>