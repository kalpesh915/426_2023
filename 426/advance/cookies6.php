<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Read Cookies </h1>
    <?php
        require_once("cookiesmenu.php");
        
        setcookie("username", "", time()-60);
        echo "Cookies deleted";
    ?>
</body>
</html>