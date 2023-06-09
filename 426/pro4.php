<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Select a Date ;
    <select>
        <?php
            FOR($i=1; $i<=31; $i++){
                ECHO "<option>$i</option>";
            }
        ?>
    </select>
</body>
</html>