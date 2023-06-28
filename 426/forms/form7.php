<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="#">
        Select City :
        <select name="city">
            <option>Rajkot</option>
            <option>Surat</option>
            <option>Baroda</option>
            <option>Bhuj</option>
            <option>Jamanagar</option>
        </select>
        <input type="submit" value="send now" name="process">
    </form>
</body>
</html>

<?php
    
    if(isset($_GET["process"])){
        
        $city = $_GET["city"];
        echo "<hr>Selected City is $city";
    }
    
?>