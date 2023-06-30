<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Cookies </h1>
    <?php
        require_once("cookiesmenu.php");

        setcookie("username", "Sunny Sata", time()+30);
        echo "Cookie Crated";
    ?>
</body>
</html>