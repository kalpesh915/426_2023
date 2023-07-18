<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        require_once("cdn.php");
    ?>
</head>
<body>
    <?php
        require_once("menu.php");
    ?>

    <div class="container-fluid">
    <?php
        if(isset($_SESSION["msg"])){
            echo $_SESSION["msg"];
            unset($_SESSION["msg"]);
        }
    ?>
        <form action="#" method="post">
            <div class="form-floating my-3">
                <input type="password" name="cpass" id="cpass" required placeholder="Enter Current Password" class="form-control">
                <label class="form-label" for="cpass">Enter Current Password</label>
            </div>
            <div class="form-floating my-3">
                <input type="password" name="npass" id="npass" required placeholder="Enter New Password" class="form-control">
                <label class="form-label" for="npass">Enter New Password</label>
            </div>
            <div class="form-floating my-3">
                <input type="password" name="rpass" id="rpass" required placeholder="Re Enter New Password" class="form-control">
                <label class="form-label" for="rpass">Re Enter New Password</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Change Password" class="btn btn-primary" name="changeProcess">
                <input type="reset" value="Reset" class="btn btn-danger"> 
            </div>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST["changeProcess"])){
        require_once("classes/Users.class.php");

        $cpass = $users->filterData($_POST["cpass"]);
        $npass = $users->filterData($_POST["npass"]);
        $rpass = $users->filterData($_POST["rpass"]);

        if($npass === $rpass){
            $cpass = sha1($cpass);
            $npass = sha1($npass);

            if($users->changePassword($email, $cpass, $npass)){
                $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Success : </b> Password change successfully.
                </div>"; 
            }else{
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> Current password does not match.
                </div>"; 
            }
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> confirm password does not match.
            </div>"; 
        }

        header("location:changepassword.php");
    }
?>