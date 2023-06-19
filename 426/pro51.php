<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /*
            find maximum out of therr numbers with use of ladder if
        */ 
        $ip1 = 155;
        $ip2 = 854;
        $ip3 = 841;

        if($ip1 > $ip2 and $ip1 > $ip3){
            $ans = $ip1;
        }else if($ip2 > $ip1 and $ip2 > $ip3){
            $ans = $ip2;
        }else if($ip3 > $ip1 and $ip3 > $ip2){
            $ans = $ip3;
        }

        echo "<hr> Maximum is $ans";
    ?>
</body>
</html>