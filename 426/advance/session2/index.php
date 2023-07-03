<?php
    session_start();
    if(isset($_SESSION["username"])){
        unset($_SESSION["username"]);
        $_SESSION["msg"] = "<div class='alert alert-dismissible alert-success'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            <b>Success : </b> Logout successfully</div>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    
        <h1 class="bg-primary text-white text-center p-4">Login Form</h1>
        <?php
            if(isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            }
        ?>
        <div class="form-floating my-3">
            <input type="email" name="email" id="email" required placeholder="Enter Email Address" class="form-control">
            <label class="form-label" for="email">Enter Email Address</label>
        </div>

        <div class="form-floating my-3">
            <input type="password" name="upass" id="upass" required placeholder="Enter Password" class="form-control">
            <label class="form-label" for="upass">Enter Password</label>
        </div>

        <div class="form-floating my-3">
            <input type="submit" value="Login" name="loginProcess" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>
</body>
</html>

<?php
    if(isset($_POST["loginProcess"])){
        $email = $_POST["email"];
        $upass = $_POST["upass"];

        //echo $email." ".$upass;
        if($email == "admin@project.com" && $upass == "admin"){
            $_SESSION["username"] = $email;
            header("location:home.php");
        }else{
            $_SESSION["msg"] = "<div class='alert alert-dismissible alert-danger'>
            <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> Invalid Username or Password</div>";
            header("location:index.php");
        }
    }
?>