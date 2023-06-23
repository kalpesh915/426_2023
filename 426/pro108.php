<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $students = ["vivek", "hemang", "dev", "naiusargi", "ganga", "sunny", "jigar", "nikhil", "kalpesh", "priya", "kairvai"];

        echo "<hr> Original Array is : <hr>";
        print_r($students);
        sort($students);
        echo "<hr> Sortred Array is : <hr>";
        print_r($students);
        rsort($students);
        echo "<hr> Sortred Array is : <hr>";
        print_r($students);
    ?>
</body>
</html>