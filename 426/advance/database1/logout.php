<?php
    session_start();
    if(isset($_SESSION["userlogin"])){
        unset($_SESSION["userlogin"]);

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <b>Success : </b>logout Successfully.
        </div>";

        header("location:index.php");
    }
?>