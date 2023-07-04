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
    <form action="#" method="post" enctype="multipart/form-data">
        <input type="file" name="file1" required accept=".jpg">
        <input type="submit" value="Upload Now" name="uploadProcess">
        <hr>
    </form>
    <?php
        if(isset($_SESSION["msg"])){
            echo "<hr>".$_SESSION["msg"]."<hr>";
            unset($_SESSION["msg"]);
        }
    ?>
</body>
</html>


<?php
    if(isset($_POST["uploadProcess"])){
        $file1 = $_FILES["file1"];
        print_r($file1);

        $source = $file1["tmp_name"];
        $destination = "files/".$file1["name"];
        $type = $file1["type"];

        if($type === "image/jpeg" || $type === "image/jpg"){
            move_uploaded_file($source, $destination);
            $_SESSION["msg"] = "File Uploaded Successfully";
        }else{
            $_SESSION["msg"] = "Must Select *.JPG files Only.";
        }

        header("location:index3.php");
    }
?>