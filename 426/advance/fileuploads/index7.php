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
        Select File for Upload : <input type="file" name="file1" id="file1" required>
        <input type="submit" value="Upload File" name="uploadProcess">
    </form>

    <hr>
    <?php
        if(isset($_SESSION["msg"])){
            echo $_SESSION["msg"];
            unset($_SESSION["msg"]);
        }
    ?>
</body>
</html>

<?php
    if(isset($_POST["uploadProcess"])){
        $file1 = $_FILES["file1"];
        $source = $file1["tmp_name"];
        $type = $file1["type"];
        $random = rand(999, 99999);


        if($type == "image/jpg" || $type == "image/jpeg"){
            $destination = "images/$random ".$file1["name"];
        }else if($type == "application/pdf"){
            $destination = "pdf/$random ".$file1["name"];
        }else if($type == "text/plain"){
            $destination = "text/$random ".$file1["name"];
        }else {
            $destination = "others/$random ".$file1["name"];
        }

        move_uploaded_file($source, $destination);

        $_SESSION["msg"] = "file uploaded successfully";
        header("location:index7.php");
    }
?>