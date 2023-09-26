<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .w-5, .h-5{
            font-size: 10px !important;
        }
    </style>
    @include("cdn")
    
</head>
<body>
    <div class="container-fluid">
        <h1 class="bg-primary text-white p-4 text-center">Students Data</h1>

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
                    </tr>
                </thead>

                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{$student['id']}}</td>
                            <td>{{$student['fname']}}</td>
                            <td>{{$student['lname']}}</td>
                            <td>{{$student['city']}}</td>
                            <td>{{$student['email']}}</td>
                            <td>{{$student['phone']}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div>
                {{$students->links()}}
            </div>
        </div>
    </div>
</body>
</html>