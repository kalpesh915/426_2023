<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<hr>Database Connection with MySqli With POP Pattern<hr>";

        $hostname = "localhost";
        $username = "root";
        $password = "";

       $connection = mysqli_connect($hostname, $username, $password);
        if(!$connection){
            die("<hr> Error while connecting database server");
        }
        echo "<hr>Database server connected<hr>"; 
       mysqli_close($connection);
    ?>
</body>
</html>