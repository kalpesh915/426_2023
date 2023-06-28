<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="#">
        <label for="uname">Enter Username</lable>
        <input type="text" name="uname" id="uname" required> <br>
        <label for="upass">Enter Password</lable>
        <input type="password" name="upass" id="upass" required> <br>
        <input type="submit" value="send now" name="process">
    </form>
</body>
</html>

<?php
    
    if(isset($_GET["process"])){
        $uname = $_GET["uname"];
        $upass = $_GET["upass"];
        echo "<hr>welcome $uname your password is $upass";
    }
    
?>