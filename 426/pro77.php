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
            continue keyword
        */ 

        for($x=1; $x<=100; $x++){
            if($x %2 == 0){
                continue;
            }
            echo " $x";
        }
    ?>
</body>
</html>