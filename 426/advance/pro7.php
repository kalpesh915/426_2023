<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $date1 = strtotime("6 august");
        echo ceil((($date1 - time()) / 60 / 60 / 24));
    ?>
</body>
</html>