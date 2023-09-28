<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    @include("cdn")
</head>
<body>
    <div class="conatainer-fluid">
        @include("menu")
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
        <h1 class="bg-primary text-white p-4 text-center">Student Data</h1>
        <div class="table-responsive">
            <table class="table table-hover table-stripped">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>City</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($studentData as $student)
                        <tr>
                            <td>{{$student["id"]}}</td>
                            <td>{{$student["fname"]}}</td>
                            <td>{{$student["lname"]}}</td>
                            <td>{{$student["city"]}}</td>
                            <td>{{$student["email"]}}</td>
                            <td>{{$student["phone"]}}</td>
                            <td>
                            <a href="/editdata/{{$student['id']}}">
                                <button class="btn btn-success">
                                    <i class="fa fa-pen"></i>
                                </button>
                            </a>
                            <a href="/deletedata/{{$student['id']}}">
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>