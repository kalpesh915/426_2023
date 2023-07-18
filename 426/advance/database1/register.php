<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
    <h1 class="bg-primary text-center text-white p-4">Registration Form</h1>
        <form action='#' method='post'>
            <div class="form-floating my-2">
                <input type="text" id="fname" name="fname" required placeholder="Enter First Name" class="form-control" autofocus>
                <label for="fname" class="form-label">Enter First Name</label>
            </div>
            <div class="form-floating my-2">
                <input type="text" id="lname" name="lname" required placeholder="Enter Last Name" class="form-control">
                <label for="lname" class="form-label">Enter Last Name</label>
            </div>
            <div class="form-floating my-2">
                <input type="text" id="city" name="city" required placeholder="Enter City Name" class="form-control">
                <label for="city" class="form-label">Enter City Name</label>
            </div>
            <div class="form-floating my-2">
                <input type="email" id="email" name="email" required placeholder="Enter Email Address" class="form-control">
                <label for="email" class="form-label">Enter Email Address</label>
            </div>
            <div class="form-floating my-2">
                <input type="password" id="upass" name="upass" required placeholder="Enter Password" class="form-control">
                <label for="upass" class="form-label">Enter Password</label>
            </div>
            <div class="form-floating my-2">
                <input type="password" id="cupass" name="cupass" required placeholder="Enter Confirm Password" class="form-control">
                <label for="cupass" class="form-label">Enter Confirm Password</label>
            </div>
            <div class="form-floating my-2">
                <input type="text" id="phone" name="phone" required placeholder="Enter Phone number" class="form-control">
                <label for="phone" class="form-label">Enter Phone Number</label>
            </div>

            <div class="my-2">
                <input type="submit" value="Register" class="btn btn-success" name="registerProcess">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
            <div class="text-center">
                <a href='index.php'>Login Now</a>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST["registerProcess"])){
        require_once("classes/Users.class.php");
        $fname = $users->filterData($_POST["fname"]);
        $lname = $users->filterData($_POST["lname"]);
        $city = $users->filterData($_POST["city"]);
        $email = $users->filterData($_POST["email"]);
        $upass = $users->filterData($_POST["upass"]);
        $cupass = $users->filterData($_POST["cupass"]);
        $phone = $users->filterData($_POST["phone"]);

        // check  password and confirm password match or not
        if($upass === $cupass){
            // encrypt the password
            $upass = sha1($upass);
            //echo $upass;

            

            if($users->addNewUser($fname, $lname, $city, $email, $upass, $phone)){
                $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Success : </b> $email Account successfully registered.
                </div>";
            }else{
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> $email is already registered.
                </div>";    
            }
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <b>Error : </b> Confirm password does not match
            </div>";
        }

        header("location:register.php");
    }
?>