<?php
    session_start();
    date_default_timezone_set("Asia/Kolkata");
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
        //$name = date("dmY_his_a")."-".$file1["name"];
        //$name = time()."-".$file1["name"];
        $name = date("dmY_his_a")."_".rand(9999, 99999)."_".$file1["name"];
        $destination = "files/".$name;
        $type = $file1["type"];
        $size = $file1["size"];
        $allowedSize = 1048576 * 2;
        if($type === "image/jpeg" || $type === "image/jpg"){
            if(!file_exists($destination)){
                if($size < $allowedSize){
                    move_uploaded_file($source, $destination);
                    $_SESSION["msg"] = "File Uploaded Successfully";
                }else{
                    $_SESSION["msg"] = "File size must be less than 2 Mb.";    
                }
            }else{
                $_SESSION["msg"] = "File Already Exist in Folder";
            } 
        }else{
            $_SESSION["msg"] = "Must Select *.JPG files Only.";
        }

        header("location:index6.php");
    }
?>