<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function greetings($user, $roll){
            echo "<hr> Welcome $user your Roll No. is $roll";
        }

        greetings("Harshil", 85);
        greetings("Vivek", 88);
    ?>
</body>
</html>