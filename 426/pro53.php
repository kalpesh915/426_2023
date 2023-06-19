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
            find maximum out of therr numbers with use of nested if
        */ 
        $ip1 = 155;
        $ip2 = 514;
        $ip3 = 4111;

        if($ip1 > $ip2){
            if($ip1 > $ip3){
                $ans = $ip1;
            }else{
                $ans = $ip3;
            }
        }else{
            if($ip2 > $ip3){
                $ans = $ip2;
            }else{
                $ans = $ip3;
            }
        }

        echo "<hr> Maximum is $ans";
    ?>
</body>
</html>