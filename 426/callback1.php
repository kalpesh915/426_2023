<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $students = ["aashita", "priya", "naisargi", "sunny", "jigar", "sanket", "dev", "nikhil", "hemang", "kairvi", "vivek", "harshil"];

        function find_length($name){
            return strlen($name);
        }

        $ans = array_map("find_length", $students);

        print_r($ans);
    ?>
</body>
</html>