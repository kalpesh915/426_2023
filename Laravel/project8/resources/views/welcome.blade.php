<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include("cdn")
</head>
<body>
    <hr>
    <h1>Flash Session</h1>
    <form method="post" action="/flash1">
        @csrf
        <input type="text" id="fname" name="fname" required>
        <input type="submit" value="Send Data">
    </form>


    <div class="container-fluid">
        <h1 class="bg-primary text-white p-4">Login Session</h1>
        <form action="/loginprocess" method="post">
            @csrf

            @if(session("error"))
                <div class="alert alert-danger alert-dismissible">
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                    <b>Error : </b> {{session("error")}}
                </div>
            @elseif(session("success"))
                <div class="alert alert-success alert-dismissible">
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                    <b>Success : </b> {{session("success")}}
                </div>
            @endif
            <div class="my-2 form-floating">
                <input type="text" name="uname" id="uname" required placeholder="Enter Username" class="form-control">
                <label class="form-label" for="uname">Enter Username</label>
            </div>
            <div class="my-2 form-floating">
                <input type="password" name="upass" id="upass" required placeholder="Enter Password" class="form-control">
                <label class="form-label" for="upass">Enter Password</label>
            </div>
            <div class="my-2 form-floating">
                <input type="submit" value="Login" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>
</html>