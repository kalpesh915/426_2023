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
        //unset($_SESSION["uname"]);
        session_destroy();
        echo "<hr>Session Deleted<hr>";
    ?>
</body>
</html>