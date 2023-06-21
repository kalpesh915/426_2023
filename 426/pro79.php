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
        parameter = $user is known as parameters
        arguments = Actual values passed when you call a function (kairvi, jigar)
    */ 
        function greetings($user){
            echo "<hr> Welcome $user to world of PHP Functions";
        }

        greetings("Kairvi");
        greetings("Jigar");
    ?>
</body>
</html>