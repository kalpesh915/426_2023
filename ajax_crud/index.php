<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendors/jquery/jquery-370-min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container-fluid">
        <h1 class="bg-primary text-center text-white p-4">PHP CRUD with AJAX and API</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>CRUD Application
                            <button class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#addStudentModal">Add New Student</button>
                        </h2>
                    </div>
                    <div class="alert alert-danger d-none" id="alertdanger">

                    </div>
                    <div class="alert alert-success d-none" id="alertsuccess">
            
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-hover" id="myDataTable">
                            <thead class="table-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>City</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                    require_once("api/connection.php");
                                    $sqlquery = "select * from students";

                                    $result = $connection->query($sqlquery);

                                    while($row = $result->fetch_assoc()){
                                        echo "<tr>
                                            <td>$row[id]</td>
                                            <td>$row[fname]</td>
                                            <td>$row[lname]</td>
                                            <td>$row[city]</td>
                                            <td>$row[email]</td>
                                            <td>$row[phone]</td>
                                            <td>
                                                <button type='button' class='btn btn-primary btnview' value='$row[id]'><i class='fa fa-eye  p-1'></i></button>
                                                <button  type='button' class='btn btn-success btnedit' value='$row[id]'><i class='fa fa-pen p-1'></i></button>
                                                <button  type='button' class='btn btn-danger btndelete' value='$row[id]'><i class='fa fa-trash p-1'></i></button>
                                            </td>
                                        </tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add New Student Modal -->
    <div class="modal" id="addStudentModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Student</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form id="addStudentForm" method="post">
                        <div class="form-floating my-2">
                            <input type="text" name="add_fname" id="add_fname" require class="form-control" placeholder="Enter First Name">
                            <label for="add_fname" class="form-label">Enter First Name</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" name="add_lname" id="add_lname" require class="form-control" placeholder="Enter Last Name">
                            <label for="add_lname" class="form-label">Enter Last Name</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" name="add_city" id="add_city" require class="form-control" placeholder="Enter City Name">
                            <label for="add_city" class="form-label">Enter City Name</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="email" name="add_email" id="add_email" require class="form-control" placeholder="Enter Email Address">
                            <label for="add_email" class="form-label">Enter Email Address</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" name="add_phone" id="add_phone" require class="form-control" placeholder="Enter Phone Number" pattern="\d{10,15}">
                            <label for="add_phone" class="form-label">Enter Phone Numver</label>
                        </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <input type="submit" value="Add New Student" name="addProcess" class="btn btn-primary">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

       <!-- View Student Modal -->
       <div class="modal" id="viewStudentModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">View Student</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form  method="post">
                        <div class="form-floating my-2">
                            <input type="text" name="view_id" id="view_id" require class="form-control" placeholder="Enter ID" readonly>
                            <label for="view_fname" class="form-label">Enter ID</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" name="view_fname" id="view_fname" require class="form-control" placeholder="Enter First Name" readonly>
                            <label for="add_fname" class="form-label">Enter First Name</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" name="view_lname" id="view_lname" require class="form-control" placeholder="Enter Last Name" readonly>
                            <label for="view_lname" class="form-label">Enter Last Name</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" name="view_city" id="view_city" require class="form-control" placeholder="Enter City Name" readonly>
                            <label for="view_city" class="form-label">Enter City Name</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="email" name="view_email" id="view_email" require class="form-control" placeholder="Enter Email Address" readonly>
                            <label for="view_email" class="form-label">Enter Email Address</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" name="view_phone" id="view_phone" require class="form-control" placeholder="Enter Phone Number" pattern="\d{10,15}" readonly>
                            <label for="view_phone" class="form-label">Enter Phone Numver</label>
                        </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal" id="editStudentModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update Student</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form  method="post" id="editStudentForm">
                        <div class="form-floating my-2">
                            <input type="text" name="edit_id" id="edit_id" require class="form-control" placeholder="Enter ID" readonly>
                            <label for="edit_id" class="form-label">Enter ID</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" name="edit_fname" id="edit_fname" require class="form-control" placeholder="Enter First Name" >
                            <label for="edit_fname" class="form-label">Enter First Name</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" name="edit_lname" id="edit_lname" require class="form-control" placeholder="Enter Last Name" >
                            <label for="edit_lname" class="form-label">Enter Last Name</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" name="edit_city" id="edit_city" require class="form-control" placeholder="Enter City Name" >
                            <label for="edit_city" class="form-label">Enter City Name</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="email" name="edit_email" id="edit_email" require class="form-control" placeholder="Enter Email Address" >
                            <label for="edit_email" class="form-label">Enter Email Address</label>
                        </div>
                        <div class="form-floating my-2">
                            <input type="text" name="edit_phone" id="edit_phone" require class="form-control" placeholder="Enter Phone Number" pattern="\d{10,15}">
                            <label for="edit_phone" class="form-label">Enter Phone Numver</label>
                        </div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save Student</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<script>
    // code for insert new student data

    $(document).on('submit', "#addStudentForm", function(event){
        event.preventDefault();
        // alert("Called");

        let formData = new FormData(this);
        formData.append("addProcess", true);
        $.ajax({
            method : "POST",
            url : "api/addnewstudent.php",
            data : formData,
            processData : false,
            contentType : false,
            success : function(response){
                //alert(response);
                let result = $.parseJSON(response);
                //alert(result);
                if(result.code == 422 || result.code == 500){
                    $("#alertdanger").removeClass("d-none");
                    $("#alertdanger").text(result.message);
                }else if(result.code == 200){
                    $("#alertsuccess").removeClass("d-none");
                    $("#alertsuccess").text(result.message);

                    $("#addStudentForm")[0].reset();
                    $("#addStudentModal").modal("hide");

                    $("#myDataTable").load(location.href+" #myDataTable");
                }
            }
        });
    });

    $(document).on('submit', "#editStudentForm", function(event){
        event.preventDefault();
        // alert("Called");

        let formData = new FormData(this);
        formData.append("editProcess", true);
        $.ajax({
            method : "POST",
            url : "api/editstudent.php",
            data : formData,
            processData : false,
            contentType : false,
            success : function(response){

                alert(response);
                let result = $.parseJSON(response);
                //alert(result);
                if(result.code == 422 || result.code == 500){
                    $("#alertdanger").removeClass("d-none");
                    $("#alertdanger").text(result.message);
                }else if(result.code == 200){
                    $("#alertsuccess").removeClass("d-none");
                    $("#alertsuccess").text(result.message);

                    $("#addStudentForm")[0].reset();
                    $("#editStudentModal").modal("hide");

                    $("#myDataTable").load(location.href+" #myDataTable");
                }
            }
        });
    });


    // delete Code
    $(document).on("click", ".btndelete", function(){
        let id = $(this).val();
        //alert(id);
        if(confirm("Are you sure to delete this Data ???")){
            $.ajax({
                type:"DELETE",
                url : "api/deletedata.php?id="+id,
                contentType : false,
                processData : false,
                success : function(response){
                    let result = $.parseJSON(response);

                    if(result.code == 200){
                        $("#alertsuccess").removeClass("d-none");
                        $("#alertsuccess").text(result.message);
                        $("#myDataTable").load(location.href+" #myDataTable");
                    }else{
                        $("#alertdanger").removeClass("d-none");
                        $("#alertdanger").text(result.message);
                    }
                }
            });
        }
    });

    // view Data
    $(".btnview").click(function(){
        let id = $(this).val();
        //alert(id);

        $.ajax({
            method : "GET",
            url : "api/getdata.php?id="+id,
            processData : false,
            contentType : false,
            success : function(response){
                //alert(response);
                let result = $.parseJSON(response);

                if(result.code == 200){
                    $("#view_id").val(result.message.id);           
                    $("#view_fname").val(result.message.fname);           
                    $("#view_lname").val(result.message.lname);           
                    $("#view_city").val(result.message.city);           
                    $("#view_email").val(result.message.email);           
                    $("#view_phone").val(result.message.phone);           
                    $("#viewStudentModal").modal('show');
                }else{
                    $("#alertdanger").removeClass("d-none");
                    $("#alertdanger").text(result.message);           
                }
            }
        });
    });

     // view Data
     $(".btnedit").click(function(){
        let id = $(this).val();
        //alert(id);

        $.ajax({
            method : "GET",
            url : "api/getdata.php?id="+id,
            processData : false,
            contentType : false,
            success : function(response){
                //alert(response);
                let result = $.parseJSON(response);

                if(result.code == 200){
                    $("#edit_id").val(result.message.id);           
                    $("#edit_fname").val(result.message.fname);           
                    $("#edit_lname").val(result.message.lname);           
                    $("#edit_city").val(result.message.city);           
                    $("#edit_email").val(result.message.email);           
                    $("#edit_phone").val(result.message.phone);           
                    $("#editStudentModal").modal('show');
                }else{
                    $("#alertdanger").removeClass("d-none");
                    $("#alertdanger").text(result.message);           
                }
            }
        });
    });
</script>