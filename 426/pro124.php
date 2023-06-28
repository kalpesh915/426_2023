<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="text" name="fname" id="fname">
        <input type="text" name="lname" id="lname">
        <input type="submit" value="send now">
        <hr>
        <?php
            print_r($_GET);
        ?>
    </form>
</body>
</html>