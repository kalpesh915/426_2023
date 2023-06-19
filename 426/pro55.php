<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $day = 1;

        switch($day){
            // always try to make strict compare never use loos compare 
            case "1":{
                echo "<hr> Monday";
                break;
            }
            case 2:{
                echo "<hr> Tuesday";
                break;
            }
            case 3:{
                echo "<hr> Wednesday";
                break;
            }
            case 4:{
                echo "<hr> Thursday";
                break;
            }
            case 5:{
                echo "<hr> Friday";
                break;
            }
            case 6:{
                echo "<hr> Saturday";
                break;
            }
            case 7:{
                echo "<hr> Sunnday";
                break;
            }
            default:{
                echo "<hr> Out of Range";
                break;
            }
        }
    ?>
</body>
</html>