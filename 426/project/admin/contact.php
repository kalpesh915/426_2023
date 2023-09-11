<?php
    require_once("commons/session.php");

    require_once("classes/Contactus.class.php");

    $result = $contactus->getContactus();

    while($row = $result->fetch_assoc()){
        $contactperson = $row["contactperson"];
        $phone1 = $row["phone1"];
        $phone2 = $row["phone2"];
        $email1 = $row["email1"];
        $email2 = $row["email2"];
        $whatsapp = $row["whatsapp"];
        $address = $row["address"];
        $googlemap = $row["googlemap"];
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
                        <h1 class="h3 mb-0 text-gray-800">Update Contact Details</h1>
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
                                <label for="contactperson" class="form-label">Enter Name of Contact Person</label>
                                <input type="text" class="form-control" name="contactperson" id="contactpersona" required value="<?php echo $contactperson; ?>">
                            </div>

                            <div class="my-2">
                                <label for="phone1" class="form-label">Enter Phone 1</label>
                                <input type="text" class="form-control" name="phone1" id="phone1" required value="<?php echo $phone1; ?>" pattern="\d{10,15}">
                            </div>

                            <div class="my-2">
                                <label for="phone2" class="form-label">Enter Phone 2</label>
                                <input type="text" class="form-control" name="phone2" id="phone2" value="<?php echo $phone2; ?>" pattern="\d{10,15}">
                            </div>

                            <div class="my-2">
                                <label for="email1" class="form-label">Enter Email 1</label>
                                <input type="email" class="form-control" name="email1" id="email1" required value="<?php echo $email1; ?>">
                            </div>

                            <div class="my-2">
                                <label for="email2" class="form-label">Enter Email 2</label>
                                <input type="email" class="form-control" name="email2" id="email2"  value="<?php echo $email2; ?>">
                            </div>

                            <div class="my-2">
                                <label for="whatsapp" class="form-label">Enter Whatsapp Number</label>
                                <input type="text" class="form-control" name="whatsapp" id="whatsapp"  value="<?php echo $whatsapp; ?>" pattern="\d{10,15}">
                            </div>

                            <div class="my-2">
                                <label for="address" class="form-label">Enter Address</label>
                                <textarea class="form-control" name="address" id="address" required style="resize:none;"><?php echo $address; ?></textarea>
                            </div>

                            <div class="my-2">
                                <label for="googlemap" class="form-label">Enter Google Map Tag</label>
                                <textarea class="form-control" name="googlemap" id="googlemap"  style="resize:none;"><?php echo $googlemap; ?></textarea>
                            </div>

                            <div class="my-2">
                                <input type="submit" value="Update Contact US" class="btn btn-primary" name="updateProcess">
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
        $contactperson = $_POST["contactperson"];
        $phone1 = $_POST["phone1"];
        $phone2 = $_POST["phone2"];
        $email1 = $_POST["email1"];
        $email2 = $_POST["email2"];
        $whatsapp = $_POST["whatsapp"];
        $address = $_POST["address"];
        $googlemap = $_POST["googlemap"];      

        $contactus->updateContact($contactperson, $phone1, $phone2, $email1, $email2, $whatsapp, $address, $googlemap);

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <b>Success : </b> Contact us Details Updated Successfully
        </div>";
        $contactus->logWriter($email, "Contact Details updated");
        header("location:contact.php");
    }
?>