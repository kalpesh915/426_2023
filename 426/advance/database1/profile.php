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
        <h1 class="bg-primary text-white p-4 text-center">Edit Profile</h1>
    </div>

    <?php
        require_once("classes/Users.class.php");

        $result = $users->getProfile($email);

        while($row = $result->fetch_assoc()){
            $fname = $row["fname"];
            $lname = $row["lname"];
            $city = $row["city"];
            $phone = $row["phone"];
        }
    ?>

    <form action="#" method="post">
        <?php
            if(isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            }
        ?>

<div class="form-floating my-2">
                <input type="text" id="fname" name="fname" required placeholder="Enter First Name" class="form-control" autofocus value="<?php echo $fname; ?>">
                <label for="fname" class="form-label">Enter First Name</label>
            </div>
            <div class="form-floating my-2">
                <input type="text" id="lname" name="lname" required placeholder="Enter Last Name" class="form-control" value="<?php echo $lname; ?>">
                <label for="lname" class="form-label">Enter Last Name</label>
            </div>
            <div class="form-floating my-2">
                <input type="text" id="city" name="city" required placeholder="Enter City Name" class="form-control" value="<?php echo $city; ?>">
                <label for="city" class="form-label">Enter City Name</label>
            </div>
            <div class="form-floating my-2">
                <input type="text" id="phone" name="phone" required placeholder="Enter Phone number" class="form-control" value="<?php echo $phone; ?>">
                <label for="phone" class="form-label">Enter Phone Number</label>
            </div>

            <div class="my-2">
                <input type="submit" value="Save Data" class="btn btn-success" name="updateProcess">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
    </form>
</body>
</html>

<?php
    if(isset($_POST["updateProcess"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $city = $_POST["city"];
        $phone = $_POST["phone"];

        $users->updateData($email, $fname, $lname, $city, $phone);

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <b>Success : </b> Account information updated successfully.
                </div>";

                header("location:profile.php");
    }
?>