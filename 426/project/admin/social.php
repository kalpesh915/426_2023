<?php
    require_once("commons/session.php");

    require_once("classes/Socail.class.php");

    $result = $social->getSocialLinks();

    while($row = $result->fetch_assoc()){
        $facebook = $row["facebook"];
        $twitter = $row["twitter"];
        $instagram = $row["instagram"];
        $youtube = $row["youtube"];
        $linkedin = $row["linkedin"];
        $snapchat = $row["snapchat"];
    }

    //echo $contactperson;
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
                        <h1 class="h3 mb-0 text-gray-800">Update Socail Media Details</h1>
                    </div>

                    <?php
                    // require_once("commons/data.php");
                    ?>

                    <!-- Content Row -->
                    <div class="container-fluid">
                        <!-- Alwasy custome code here -->
                        <form action="#" method="post">
                            <?php
                                if(isset($_SESSION["msg"])){
                                    echo $_SESSION["msg"];
                                    unset($_SESSION["msg"]);
                                }
                            ?>
                            <div class="my-2">
                                <label for="facebook" class="form-label">Enter Facebook Link</label>
                                <input type="url" class="form-control" name="facebook" id="facebook" required value="<?php echo $facebook; ?>">
                            </div>

                            <div class="my-2">
                                <label for="twitter" class="form-label">Enter Twitter Link</label>
                                <input type="url" class="form-control" name="twitter" id="twitter" required value="<?php echo $twitter; ?>">
                            </div>

                            <div class="my-2">
                                <label for="instagram" class="form-label">Enter Instagram Link</label>
                                <input type="url" class="form-control" name="instagram" id="instagram" required value="<?php echo $instagram; ?>">
                            </div>

                            <div class="my-2">
                                <label for="youtube" class="form-label">Enter Youtube Link</label>
                                <input type="url" class="form-control" name="youtube" id="youtube" required value="<?php echo $youtube; ?>">
                            </div>

                            <div class="my-2">
                                <label for="linkedin" class="form-label">Enter Linkedin Link</label>
                                <input type="url" class="form-control" name="linkedin" id="linkedin" required value="<?php echo $linkedin; ?>">
                            </div>

                            <div class="my-2">
                                <label for="snapchat" class="form-label">Enter Snapchat Link</label>
                                <input type="url" class="form-control" name="snapchat" id="snapchat" required value="<?php echo $snapchat; ?>">
                            </div>
                            <div class="my-2">
                                <input type="submit" value="Update Social Media Link" class="btn btn-primary" name="updateProcess">
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
    if(isset($_POST["updateProcess"])){
        $facebook = $_POST["facebook"];
        $twitter = $_POST["twitter"];
        $instagram = $_POST["instagram"];
        $youtube = $_POST["youtube"];
        $linkedin = $_POST["linkedin"];
        $snapchat = $_POST["snapchat"];

        $social-> updateSocilaMedia($facebook, $twitter, $instagram, $youtube, $linkedin, $snapchat);

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <b>Success : </b> Social Media Links Details Updated Successfully
        </div>";
        $social->logWriter($email, "Social Media Details updated");
        header("location:social.php");
    }
?>