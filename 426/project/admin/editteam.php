<?php
    require_once("commons/session.php");
    require_once("classes/Team.class.php");

    $teamid = $_GET["teamid"];

    $result = $team->getSingleTeamMember($teamid);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $memebername = $row["membername"];
            $designation = $row["designation"];
            $twitter = $row["twitter"];
            $facebook = $row["facebook"];
            $instagram = $row["instagram"];
            $linkedin = $row["linkedin"];
            $currentimg = $row["teamimage"];
        }
    }else{
        header("location:team.php");
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
                                <label class="form-label" for="mambername">Enter Team Member Name</label>
                                <input type="text" class="form-control" name="membername" id="membername" required value="<?php echo $memebername; ?>">
                            </div>

                            <div class="my-2">
                                <label class="form-label" for="designation">Enter Designation</label>
                                <input type="text" class="form-control" name="designation" id="designation" required value="<?php echo $designation ?>">
                            </div>

                            <div class="my-2">
                                <label class="form-label" for="twitter">Enter Link of Twitter Account</label>
                                <input type="url" class="form-control" name="twitter" id="twitter" value="<?php echo $twitter; ?>">
                            </div>

                            <div class="my-2">
                                <label class="form-label" for="facebook">Enter Link of Facebook Account</label>
                                <input type="url" class="form-control" name="facebook" id="facebook" value="<?php echo $facebook; ?>">
                            </div>

                            <div class="my-2">
                                <label class="form-label" for="instagram">Enter Link of Instagram Account</label>
                                <input type="url" class="form-control" name="instagram" id="instagram" value="<?php echo $instagram; ?>">
                            </div>

                            <div class="my-2">
                                <label class="form-label" for="linkedin">Enter Link of Linkedin Account</label>
                                <input type="url" class="form-control" name="linkedin" id="linkedin" value="<?php echo $linkedin; ?>">
                            </div>

                            <div class="my-2">
                                <label class="form-label" for="teamimg">Select Image of Team Member</label>
                                <input type="file" class="form-control" name="teamimg" id="teamimg" accept=".jpg">
                            </div>
                            
                            <div class="my-2">
                                <img src="<?php echo $currentimg; ?>" class="w-100 img-rounded">
                            </div>

                            <div class="my-2">
                                <input type="submit" value="Update Team Member" class="btn btn-primary" name="updateProcess">
                                <input type="reset" value="Reset" class="btn btn-danger">
                            </div>

                        </form>
                    
                        <hr>

                        <form action='editteam.php?teamid=<?php echo $teamid;?>&delete=true' method="post" name="delete" id="deleteform">
                                <input type="button" value="Delete Team Member" name="deleteProcess" class="btn btn-danger btn-block" onclick="confirmDelete()">
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
        $membername = $_POST["membername"];
        $designation = $_POST["designation"];
        $twitter = $_POST["twitter"];
        $facebook = $_POST["facebook"];
        $instagram = $_POST["instagram"];
        $linkedin = $_POST["linkedin"];
        

        if($_FILES["teamimg"]["name"] == ""){
            $team->updateTeamMember($teamid, $membername, $designation, $twitter, $facebook, $instagram, $linkedin);
        }else{
            $teamimg = $_FILES["teamimg"];
            $type = $teamimg["type"];
            
            if($type == "image/jpg" || $type == "image/jpeg"){
                $source = $teamimg["tmp_name"];
                $rand = rand(999, 9999);
                $name = $rand." _ ".$teamimg["name"];
                $destination = "img/teamimages/$name";

                // delete file n given parameter 
                unlink($currentimg);
                move_uploaded_file($source, $destination);
                $team->updateTeamMember($teamid, $membername, $designation, $twitter, $facebook, $instagram, $linkedin, $destination);
            }else{
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <b>Error : </b> Must select *.JPG files only
                </div>";
            }
        }

        header("location:editteam.php?teamid=$teamid");
    }   


    if(isset($_GET["delete"])){
        $teamid = $_GET["teamid"];
        $team->deleteTeam($teamid);

        header("location:team.php");
    }
?>

<script>
    function confirmDelete(){
        if(confirm("Are you Sure to delete this Team Member?")){
            let btn1 = document.getElementById("deleteform");
            btn1.submit();
        }
    }
</script>