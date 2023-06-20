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
            // nested outer loop
            for(init; condition; increment / decrement){
                executable code

                // inner loop
                for(init; condition; increment / decrement){
                    executable code
                }
            }
        */ 

        for($i=1; $i<=10; $i++){
            for($j=1; $j<=$i; $j++){
                echo " *";
            }
            echo "<br>";
        }
    ?>
</body>
</html>