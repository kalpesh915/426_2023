<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include("cdn")
</head>
<body>
    <h1 class="bg-primary text-white p-4 text-center">Get Method Example</h1>
    <form action="/getprocess" method="get">
        <div class="my-2 form-floating">
            <input type="text" name="fname" id="fname" require placeholder="Enter First Name" class="form-control">
            <label class="form-lable" for="fname">Enter First Name</label>
        </div>

        <div class="my-2 form-floating">
            <input type="text" name="lname" id="lname" require placeholder="Enter Last Name" class="form-control">
            <label class="form-lable" for="lname">Enter Last Name</label>
        </div>

        <div class="my-2 form-floating">
            <input type="submit" value="Send Data" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>

    <hr>

    <h1 class="bg-primary text-white p-4 text-center">Post Method Example</h1>
    <form action="/postprocess" method="post">
        @csrf
        <div class="my-2 form-floating">
            <input type="text" name="fname" id="fname" require placeholder="Enter First Name" class="form-control">
            <label class="form-lable" for="fname">Enter First Name</label>
        </div>

        <div class="my-2 form-floating">
            <input type="text" name="lname" id="lname" require placeholder="Enter Last Name" class="form-control">
            <label class="form-lable" for="lname">Enter Last Name</label>
        </div>

        <div class="my-2 form-floating">
            <input type="submit" value="Send Data" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-danger">
        </div>
    </form>
</body>
</html>