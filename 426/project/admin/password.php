<?php
    require_once("commons/session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
        require_once("commons/meta.php");
    ?>

    <title></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
         require_once("commons/sidebar.php");
        ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php
                require_once("commons/topbar.php");
                ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Change Password</h1>
                    </div>

                    <?php
                    // require_once("commons/data.php");
                    ?>

                    <!-- Content Row -->
                    <div class="container-fluid">
                        <!-- Alwasy custome code here -->
                        <?php
                            if(isset($_SESSION["msg"])){
                                echo $_SESSION["msg"];
                                unset($_SESSION["msg"]);
                            }
                        ?>
                        <form action="#" method="post">
                            <div class="my-2">
                                <label for="cpass" class="form-label">Enter Current Password</label>
                                <input type="password" name="cpass" id="cpass" required class="form-control" autofocus>
                            </div>

                            <div class="my-2">
                                <label for="npass" class="form-label">Enter New Password</label>
                                <input type="password" name="npass" id="npass" required class="form-control">
                            </div>

                            <div class="my-2">
                                <label for="cnpass" class="form-label">Enter Confirm Password</label>
                                <input type="password" name="cnpass" id="cnpass" required class="form-control">
                            </div>

                            <div class="my-2">
                                <input type="submit" value="Change Password" class="btn btn-primary" name="changeProcess">
                                <input type="reset" value="Reset" class="btn btn-danger">
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php
            require_once("commons/footer.php");
            ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

   
</body>

</html>

<?php
    if(isset($_POST["changeProcess"])){
        require_once("classes/Users.class.php");

        $cpass = $users->filterData($_POST["cpass"]);
        $npass = $users->filterData($_POST["npass"]);
        $cnpass = $users->filterData($_POST["cnpass"]);

        if($npass === $cnpass){
            $cpass = sha1($cpass);
            $npass = sha1($npass);

            if($users->changePassword($email, $cpass, $npass)){
                $users->logWriter($email, "Password updated");
                $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <b>Success.</b> Password updated successfully
            </div>";
            }else{
                $users->logWriter($email, "unsuccessfull attempt to Password updated");
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <b>Error.</b> Current Password does not match.
            </div>";
            }
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <b>Error.</b> Confirm Password does not match.
            </div>";
        }

        header("location:password.php");
    }
?>