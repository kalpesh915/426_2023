<?php
    session_start();
?>
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
    <div class='container-fluid p-5 '>
    <?php
        if(isset($_SESSION["msg"])){
            echo $_SESSION["msg"];
            unset($_SESSION["msg"]);
        }
    ?>
        <form action="#" method="post">
            <div class="form-floating my-2">
                <input type="email" id="email" name="email" required placeholder="Enter Email Address" class="form-control" autofocus>
                <label for="email" class="form-label">Enter Email Address</label>
            </div>
            <div class="form-floating my-2">
                <input type="password" id="upass" name="upass" required placeholder="Enter Password" class="form-control">
                <label for="upass" class="form-label">Enter Password</label>
            </div>

            <div class="my-2">
                <input type="submit" value="Login" class="btn btn-success" name="loginProcess">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
            <div class="text-center">
                <a href='register.php'>Create New Account</a>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST["loginProcess"])){
        require_once("classes/Users.class.php");
        $email = $users->filterData($_POST["email"]);
        $upass = sha1($users->filterData($_POST["upass"]));

        

        if($users->loginProcess($email, $upass)){
            $_SESSION["userlogin"] = $email;
            header("location:home.php");
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> invalid username or password.
            </div>"; 
            header("location:index.php");
        }
    }
?>