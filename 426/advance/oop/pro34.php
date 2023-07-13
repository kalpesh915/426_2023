<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        $students = ["Aashita", "Ganga", "Vivek", "Jigar", "Sunny", "Kalpesh", "Nikhil", "sanket", "Harshil", "Naisargi", "priya"];

        function printer(iterable $data){
            foreach($data as $tmp){
                echo "<hr> Welcome $tmp";
            }
        }

        printer($students);
    ?>
</body>
</html>