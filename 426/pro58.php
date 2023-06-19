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
            while(condition){
                executable code
            }

            count how many digits in number
        */ 

        $ip1 = 452361;

        $ans = 0;

        while($ip1 > 0){
            $ans++;
            $ip1 = (int)($ip1 / 10);
            //echo "<hr>".$ip1;
        }

        echo $ans;
    ?>
</body>
</html>