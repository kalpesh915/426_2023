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
        <h1 class='bg-danger p-4 text-center text-white'>Delete Account</h1>
            <div class="form-floating my-3">
                <input type="password" name="cpass" id="cpass" required placeholder="Enter Current Password" class="form-control">
                <label class="form-label" for="cpass">Enter Current Password</label>
            </div>
          
            <div class="my-3">
                <input type="submit" value="Delete Account" class="btn btn-primary" name="deleteProcess">
                <input type="reset" value="Reset" class="btn btn-danger"> 
            </div>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST["deleteProcess"])){
        require_once("classes/Users.class.php");

        $cpass = $users->filterData($_POST["cpass"]);
    
        $cpass = sha1($cpass);
        if($users->loginProcess($email, $cpass)){
            $users->deleteAccount($email);
            $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b>$email  Account is Deleted
            </div>";
            unset($_SESSION["userlogin"]);
            header("location:index.php");
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> Current password does not match
            </div>";
            header("location:delete.php");
        }
    }
?>