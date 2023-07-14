<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<hr>Database Connection with MySqli With OOP Pattern<hr>";

        $hostname = "localhost";
        $username = "root";
        $password = "";

        $connection = new mysqli($hostname, $username, $password);

        if($connection->connect_error){
            die("<hr> Error while connecting database server ".$connection->connect_error);
        }

        echo "<hr>Database Server connected";
        $connection->close();
    ?>
</body>
</html>