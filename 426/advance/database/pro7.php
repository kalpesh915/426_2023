<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="fname">Enter First Name</label>
        <input type="text" name="fname" id="fname" required autofocus> <br>
        <label for="lname">Enter Last Name</label>
        <input type="text" name="lname" id="lname" required> <br>
        <label for="city">Enter City</label>
        <input type="text" name="city" id="city" required> <br>
        <label for="email">Enter Email Address</label>
        <input type="email" name="email" id="email" required> <br>
        <label for="phone">Enter Phone Number</label>
        <input type="text" name="phone" id="phone" required pattern="\d{10,13}"> <br>
        <input type="submit" value="add new student" name="addProcess">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    if(isset($_POST["addProcess"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $city = $_POST["city"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];


        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "426dbms";

        $connection = new mysqli($hostname, $username, $password, $database);

        if($connection->connect_error){
            die("<hr> Error while connecting with database server ".$connection->connect_error);
        }

        $sqlquery = "insert into students (fname, lname, city, email, phone ) values ('$fname', '$lname', '$city', '$email', '$phone')";

        //echo $sqlquery;

        if($connection->query($sqlquery) === true){
            echo "<hr> Data inserted with ".$connection->insert_id." id";
        }else{
            echo "<hr> Record not created";
        }

        $connection->close();
    }
?>