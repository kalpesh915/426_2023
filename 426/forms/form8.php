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
        <input type="text" name="uname" id="uname" required>
        <input type="submit" value="send now" name="process">
    </form>
</body>
</html>

<?php
    
    if(isset($_GET["process"])){
        
        $uname = $_GET["uname"];

        // filter a data
        $uname = trim($uname);
        $uname = htmlspecialchars($uname);
        $uname = stripslashes($uname);

        echo "<hr>Welcome $uname";
    }
    
?>