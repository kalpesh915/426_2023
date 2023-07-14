<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "426dbms";

        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            die("<hr> Connection Failed ".$connection->connect_error);
        }

        $preparedStatement = $connection->prepare("insert into students (fname, lname, city, email, phone ) values (?,?,?,?,?)");
        $preparedStatement->bind_param("sssss", $fname, $lname, $city, $email, $phone);

        $fname = "Vivek";
        $lname = "Dodiya";
        $city = "Ahamdabad";
        $email = "vivek@padadhri.com";  
        $phone = "999887772";
        $preparedStatement->execute();


        $preparedStatement->close();
        $connection->close();
    ?>
</body>
</html>