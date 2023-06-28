<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="#">
        Select Gender :
        <input type="radio" name='gender' value="male">Male
        <input type="radio" name='gender' value="female" checked>Female
        <input type="submit" value="send now" name="process">
    </form>
</body>
</html>

<?php
    
    if(isset($_GET["process"])){
        
        $gender = $_GET["gender"];
        echo "<hr>Selected Gender is $gender";
    }
    
?>