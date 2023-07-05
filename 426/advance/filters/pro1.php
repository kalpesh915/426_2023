<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // print_r(filter_list());
    ?>

    <table border="2">
        <tr>
            <th>Filter ID</th>
            <th>Filter Name</th>
        </tr>

        <?php
            foreach(filter_list() as $key=>$value){
                echo "<tr>
                    <td>$key</td>
                    <td>$value</td>
                </tr>";
            }
        ?>
    </table>
</body>
</html>