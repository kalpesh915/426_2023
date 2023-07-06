<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function divide($dividend, $divisor) {
            if($divisor == 0) {
              throw new Exception("Division by zero", 250);
            }
            return $dividend / $divisor;
        }
        
        try{
            echo divide(15, 0);
        }catch(Exception $err){
            //echo "<hr> Error is $err";
            //echo " message is ".$err->getMessage();
            //echo "Code is ".$err->getCode();
            //echo "Line ".$err->getLine();
            echo "File ".$err->getFile();
        }finally{
            echo "<hr> Must be executed";
        }

        echo "<hr> Program Completed";
        
    ?>
</body>
</html>