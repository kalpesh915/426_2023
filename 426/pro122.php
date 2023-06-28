<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<table border='1'>
        <tr>
            <th>Propery </th>
            <th>Value</th>
        </tr>";
        foreach($_SERVER as $key=>$value){
            echo "<tr>
                <td>$key</td>
                <td>$value</td>
            </tr>";
        }
        echo "</table>";
    ?>
</body>
</html>