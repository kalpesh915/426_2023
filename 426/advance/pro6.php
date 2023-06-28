<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $startdate = strtotime("Sunday");
        $enddate = strtotime("+10 weeks", $startdate);
    
        while ($startdate < $enddate) {
            echo date("d/m/Y l", $startdate) . "<br>";
            $startdate = strtotime("+1 week", $startdate);
        }
    ?>
</body>
</html>