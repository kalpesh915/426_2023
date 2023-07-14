<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<hr>Database Connection with MySqli With PDO Pattern<hr>";

        $hostname = "localhost";
        $username = "root";
        $password = "";

       $connection = new PDO("mysql:host=$hostname", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       echo "<hr> Database Server Connected WIth PDO";
       $connection = null;
    ?>
</body>
</html>