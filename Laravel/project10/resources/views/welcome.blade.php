<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Data</title>
    @include("cdn")
</head>
<body>
    <div class="container-fluid">
        @include("menu")
        <h1 class="bg-primary text-center text-white p-4">Add New Data</h1>

        @if(session("error"))
            <div class="alert alert-danger alert-dismissible">
                <button class="btn-close"></button>
                <b>Error : </b> {{session("error")}}
            </div>
        @elseif(session("success"))
            <div class="alert alert-success alert-dismissible">
                <button class="btn-close"></button>
                <b>Success : </b> {{session("success")}}
            </div>
        @endif

        <form action="/addprocess" method="post">
            @csrf
            <div class="my-2 form-floating">
                <input type="text" name="fname" id="fname" placeholder="Enter First name" required class="form-control" autofocus>
                <label class="form-lable" for="fname">Enter First Name</label>
            </div>

            <div class="my-2 form-floating">
                <input type="text" name="lname" id="lname" placeholder="Enter Last name" required class="form-control">
                <label class="form-lable" for="lname">Enter Last Name</label>
            </div>

            <div class="my-2 form-floating">
                <input type="text" name="city" id="city" placeholder="Enter City name" required class="form-control">
                <label class="form-lable" for="city">Enter City Name</label>
            </div>

            <div class="my-2 form-floating">
                <input type="email" name="email" id="email" placeholder="Enter Email Address" required class="form-control">
                <label class="form-lable" for="email">Enter Email Address</label>
            </div>

            <div class="my-2 form-floating">
                <input type="text" name="phone" id="phone" placeholder="Enter Phone Number" required class="form-control">
                <label class="form-lable" for="phone">Enter Phone Number</label>
            </div>

            <div class="my-2 form-floating">
                <input type="submit" value="Add New Student" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>
</html>