<?php
    require_once("commons/session.php");
    require_once("classes/Products.class.php");
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
                        <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
                        
                    </div>

                    <?php
                        if(isset($_SESSION["msg"]))
                        {
                            echo $_SESSION["msg"];
                            unset($_SESSION["msg"]);
                        }
                    ?>

                    <div id="form1">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <div class="my-2">
                                <label class="form-label" for="productname">Enter Product Name</label>
                                <input type="text" class="form-control" name="productname" id="productname" required>
                            </div>

                            <div class="my-2">
                                <label class="form-label" for="designation">Select Category</label>
                                <select class="form-control" name="category" required>
                                    <?php
                                        $categoryResult = $products->getAllCategory();

                                        while($row = $categoryResult->fetch_assoc()){
                                            echo "<option value='$row[categoryid]'>$row[categoryname]</option>";
                                        }
                                    ?>
                                </select>
                            </div>

                            <div class="my-2">
                                <label class="form-label" for="description">Enter Product Description</label>
                                <textarea class="form-control" name="description" id="description"></textarea>
                            </div>

                            <div class="my-2">
                                <label class="form-label" for="price">Enter Product Price</label>
                                <input type="text" class="form-control" name="price" id="price">
                            </div>

                            <div class="my-2">
                                <label class="form-label" for="material">Enter Product Material</label>
                                <input type="text" class="form-control" name="material" id="material">
                            </div>

                            <div class="my-2">
                                <label class="form-label" for="packaging">Enter Product Packaging</label>
                                <input type="text" class="form-control" name="packaging" id="packaging">
                            </div>

                            <div class="my-2">
                                <label class="form-label" for="batchno">Enter Product Batch</label>
                                <input type="text" class="form-control" name="batchno" id="batchno">
                            </div>

                            <div class="my-2">
                                <label class="form-label" for="productimages">Select Image of Products</label>
                                <input type="file" class="form-control" name="productimages[]" id="productimages" required accept=".jpg" multiple>
                            </div>
                            
                            <div class="my-2">
                                <input type="submit" value="Add New Products" class="btn btn-primary" name="addProcess">
                                <input type="reset" value="Reset" class="btn btn-danger">
                            </div>

                        </form>
                    </div>

                    <?php
                    // require_once("commons/data.php");
                    ?>

                    <!-- Content Row -->
                    <div class="container-fluid">
                        <!-- Alwasy custome code here -->
                        
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
    if(isset($_POST["addProcess"])){
        $productname = $_POST["productname"];        
        $category = $_POST["category"];
        $description = $_POST["description"];
        $price = $_POST["price"];
        $material = $_POST["material"];
        $packaging = $_POST["packaging"];
        $batchno = $_POST["batchno"];
        $productimages = $_FILES["productimages"];


        $productid = $products->addNewProduct($productname, $category, $description, $price, $material, $packaging, $batchno);

        $validtype = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/webp"];

        //echo count($productimages["name"]);

        // upload image process

        $invalidimagecount = 0;

        for($i = 0; $i < count($productimages["name"]); $i++){
            /// get type of image
            $type = $productimages["type"][$i];

            // check for valid image type
            if(in_array($type, $validtype)){
                $source = $productimages["tmp_name"][$i];
                $rand = rand(999, 9999);
                $name = $rand." ".$productimages["name"][$i];
                $destination = "img/productsimages/$name";
                
                move_uploaded_file($source, $destination);

                $products->addProductImages($productid, $destination);

            }else{
                $invalidimagecount++;
            }
        }

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <b>Success : </b> New Product Uploaded ($invalidimagecount) Images are not valid
            </div>";
            header("location:addproduct.php");

        //echo "new product id is $productid";
    }
?>

