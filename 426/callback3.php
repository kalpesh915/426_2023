<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function question($data){
            return $data."?";
        }

        function fullstop($data){
            return $data.".";
        }

        function exclaim($data){
            return $data."!";
        }

        function format($data, $sign){
            echo "<hr>".$sign($data);
        }

        format("Kairavi Parsana", "question");
        format("Kairavi Parsana", "exclaim");
    ?>
</body>
</html>