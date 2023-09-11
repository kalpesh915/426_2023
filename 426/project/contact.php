<?php
    session_start();
    ob_start();

    require_once("classes/Client.class.php");

    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $client->saveMessage($name, $phone, $email, $subject, $message);

    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'><button class='btn-close' data-bs-dismiss='alert'></button><b>Success : </b>Thanks for Feedback, we will contact you soon</div>";
    header("location:index.php#contact");
?>