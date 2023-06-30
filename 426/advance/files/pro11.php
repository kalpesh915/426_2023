<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <input type="text" name="filename" required placeholder="Enter File Name"><hr>
        <textarea name="data" required rows="10" cols="50" placeholder="Write Data"></textarea>

        <input type="submit" value="write data" name="write">
    </form>
    <?php
        if(isset($_POST["write"])){
            $filename = $_POST["filename"];
            $data = $_POST["data"];

            $fp = fopen($filename, 'w');
            fwrite($fp, $data);
            fclose($fp);

            echo "File Writing completed";
        }
    ?>
</body>
</html>