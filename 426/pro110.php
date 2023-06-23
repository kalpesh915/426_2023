<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $students = [15=>"vivek", 65=>"hemang", 99=>"dev", 42=>"naiusargi", 14=>"ganga", 32=>"sunny", 52=>"jigar", 55=>"nikhil", 42=>"kalpesh", 46=>"priya", 21=>"kairvai"];

        echo "<hr> Original Array is : <hr>";
        print_r($students);
        // sort($students);
        // echo "<hr> Sortred Array is : <hr>";
        // print_r($students);
        ksort($students);
        echo "<hr> Sortred Array is : <hr>";
        print_r($students);
        krsort($students);
        echo "<hr> Sortred Array is : <hr>";
        print_r($students);
    ?>
</body>
</html>