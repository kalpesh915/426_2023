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
        <input type="file" name="file1[]" id="file1" required multiple>
        <input type="submit" value="upload files" name="uploadProcess">
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
        print_r($file1);
        $count = 0;
        for($i=0; $i<count($file1["name"]); $i++){
            $source = $file1["tmp_name"][$i];
            $type = $file1["type"][$i];
            $name = $file1["name"][$i];
            $random = rand(9999, 99999);
            $destination = "images/$random ".$name;

            if($type == "image/jpg" || $type == "image/jpeg"){
                $count++;
                move_uploaded_file($source, $destination);
            }
        }

        $_SESSION["msg"] = "Total $count Files Uploaded";
        header("location:index9.php");
    }
?>