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
        for($i=1; $i<=10; $i++){
            for($j=1; $j<=10; $j++){
                echo " *";
            }
            echo "<br>";
        }*/

        // convert above code in nested while loop

        $i = 1;
        // outer
        while($i <= 10){

            // inner loop
            $j = 1;
            while($j<=10){
                echo " *";
                $j++;
            }
            echo "<br>";
            $i++;
        }
    ?>
</body>
</html>