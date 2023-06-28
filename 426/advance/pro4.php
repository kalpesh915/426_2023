<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //$newdate = strtotime("today");
        //$newdate = strtotime("next friday");
        $newdate = strtotime("+100 days");
        echo date("d m Y h:i:s a", $newdate);
    ?>
</body>
</html>