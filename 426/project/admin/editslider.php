<?php
    require_once("commons/session.php");
    require_once("classes/Slider.class.php");

    $sliderid = $_GET["sliderid"];

    $result = $slider->getSingleSliders($sliderid);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $title = $row["title"];
            $description = $row["description"];
            $currentimage = $row["imagepath"];
            $imgtype = $row["imagetype"];
        }
    }else{
        header("location:slider.php");
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
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="my-2">
                                <label class="form-label" for="title">Enter Title of Slider</label>
                                <input type="text" class="form-control" name="title" id="title" required value="<?php echo $title; ?>">
                            </div>

                           
                            <div class="my-2">
                                <label class="form-label" for="description">Enter Description of Slider</label>
                                <input type="text" class="form-control" name="description" id="description"  required value="<?php echo $description; ?>">
                            </div>

                            <div class="my-2">
                                <label class="form-label" for="sliderimg">Select New Image for Slider</label>
                                <input type="file" class="form-control" name="sliderimg" id="sliderimg"  accept=".jpg">
                            </div>


                            <div class="my-2">
                                <label class="form-label" for="imgtype">Select Image for Slider / Gallery</label>
                                <select  class="form-control" name="imgtype" id="imgtype" required >
                                    <?php
                                        if($imgtype == 1){
                                            echo "<option value='1' selected>Slider</option>
                                                <option value='2'>Gallery</option>";
                                        }else{
                                            echo "<option value='1'>Slider</option>
                                            <option value='2' selected>Gallery</option>";
                                        }
                                    ?>
                                    
                                </select>
                            </div>

                            <div class="my-2">
                                <img src="<?php echo $currentimage;?>" class='img-rounded w-100'>
                            </div>

                            <div class="my-2">
                                <input type="submit" value="Update Slider" class="btn btn-primary" name="updateProcess">
                                <input type="reset" value="Reset" class="btn btn-danger">
                            </div>
                        </form>

                        <hr>

                        <form action='editslider.php?sliderid=<?php echo $sliderid;?>&delete=true' method="post" name="delete" id="deleteform">
                                <input type="button" value="Delete Slider" name="deleteProcess" class="btn btn-danger btn-block" onclick="confirmDelete()">
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
        $description = $_POST["description"];
        $imgtype = $_POST["imgtype"];

        if($_FILES["sliderimg"]["name"] == ""){
            $slider->updateSlider($sliderid, $title, $description, null, $imgtype);
        }else{
            $sliderimg = $_FILES["sliderimg"];
            $type = $sliderimg["type"];
            
            if($type == "image/jpg" || $type == "image/jpeg"){
                $source = $sliderimg["tmp_name"];
                $rand = rand(999, 9999);
                $name = $rand." _ ".$sliderimg["name"];
                $destination = "img/sliderimages/$name";

                // delete file n given parameter 
                unlink($currentimage);
                move_uploaded_file($source, $destination);
                $slider->updateSlider($sliderid, $title, $description, $destination, $imgtype);
            }else{
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <b>Error : </b> Must select *.JPG files only
                </div>";
            }
        }

        header("location:editslider.php?sliderid=$sliderid");
    }   


    if(isset($_GET["delete"])){
        $sliderid = $_GET["sliderid"];
        $slider->deleteSlider($sliderid);

        header("location:slider.php");
    }
?>

<script>
    function confirmDelete(){
        if(confirm("Are you Sure to delete this Slider?")){
            let btn1 = document.getElementById("deleteform");
            btn1.submit();
        }
    }
</script>