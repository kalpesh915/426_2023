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
        <form>
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