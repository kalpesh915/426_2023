<?php
    session_start();
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once("sessionmenu.php");
        $_SESSION["uname"] = "Hemang Baldha";
        $_SESSION["city"] = "Rajkot";
        echo "<hr>Session Created Successfully<hr>";
    ?>
</body>
</html>