<?php 
    session_start();
    ob_start();

    require_once("classes/Client.class.php");

    $candidatename = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $qualification = $_POST["qualification"];
    $experience = $_POST["experience"];
    $resume = $_FILES["resume"];

    if($resume["type"] == "application/pdf"){

        $source = $resume["tmp_name"];
        $date = time();
        $name = $candidatename." - ".$date." ".$resume["name"];
        $destination = "resumes/$name";

        $client->resumeUpload($candidatename, $phone, $email, $qualification, $experience, $destination);

        move_uploaded_file($source, "admin/$destination");

        $_SESSION["careermsg"] = "<div class='alert alert-success alert-dismissible'><button class='btn-close' data-bs-dismiss='alert'></button><b>Success : </b>Thanks for Applying, we will contact you soon</div>";
    }else{
        
        $_SESSION["careermsg"] = "<div class='alert alert-danger alert-dismissible'><button class='btn-close' data-bs-dismiss='alert'></button><b>Error : </b>Please Upload CV / Resume in .PDF file only</div>";
    }

    header("location:index.php#career");
?>