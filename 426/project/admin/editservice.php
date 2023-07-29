<?php
    require_once("commons/session.php");
    require_once("classes/Services.class.php");

    $serviceid = $_GET["serviceid"];

    $result = $services->getSingleService($serviceid);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $title = $row["title"];
            $icon = $row["icon"];
            $description = $row["description"];
        }
    }else{
        header("location:services.php");
    }
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


     <!-- Custom styles for this page -->
     <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                        <h1 class="h3 mb-0 text-gray-800">Edit Services</h1>
                        
                    </div>

                    <?php
                        if(isset($_SESSION["msg"]))
                        {
                            echo $_SESSION["msg"];
                            unset($_SESSION["msg"]);
                        }
                    ?>

                    <div id="form1" >
                        <form action="#" method="post">
                            <div class="my-2">
                                <label class="form-label" for="title">Enter Title of Service</label>
                                <input type="text" class="form-control" name="title" id="title" required value="<?php echo $title; ?>">
                            </div>

                            <div class="my-2">
                                <label class="form-label" for="icon">Enter Icon of Service Current Icon ( <?php echo $icon; ?> )</label>
                                <input type="text" class="form-control" name="icon" id="icon" required value='<?php echo $icon; ?>'>
                                <a href="https://fontawesome.com/v4/icons/" target="_blank">Find Icons</a>
                            </div>

                            <div class="my-2">
                                <label class="form-label" for="description">Enter Description of Service</label>
                                <input type="text" class="form-control" name="description" id="description"  required value="<?php echo $description; ?>">
                            </div>

                            <div class="my-2">
                                <input type="submit" value="Update Service" class="btn btn-primary" name="updateProcess">
                                <input type="reset" value="Reset" class="btn btn-danger">
                            </div>

                        </form>
                    </div>

                    <?php
                    // require_once("commons/data.php");
                    ?>

                    <!-- Content Row -->
                    <div class="container-fluid">
                          
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
        $title = $_POST["title"];
        $icon = $_POST["icon"];
        $description = $_POST["description"];

        $services->updateService($serviceid, $title, $icon, $description);
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button type='button' class='close' data-dismiss='alert'>&times;</button>
        <b>Success : </b> $title Service Updated in database
        </div>";
        header("location:services.php");
    }

   
?>
