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
            break keyword
        */ 

        for($x=1; $x<=10; $x++){
            if($x == 5){
                break;
            }
            echo " $x";
        }
    ?>
</body>
</html>