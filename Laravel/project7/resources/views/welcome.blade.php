<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <hr>
    <h1>Get Method</h1>
    <form action="/getprocess" method="get">
        <input type="text" name="fname" id="fname" require placeholder="Enter First Name">
        <input type="text" name="lname" id="lname" require placeholder="Enter Last Name">
        <input type="submit" value="Send Data">
    </form>
    <hr>
    <h1>Post Method</h1>
    <form action="/postprocess" method="post">
        @csrf
        <input type="text" name="fname" id="fname" require placeholder="Enter First Name">
        <input type="text" name="lname" id="lname" require placeholder="Enter Last Name">
        <input type="submit" value="Send Data">
    </form>
    <hr>
    <h1>Put Method</h1>
    <form action="/putprocess" method="post">
        @csrf
        {{method_field("put")}}
        <input type="text" name="fname" id="fname" require placeholder="Enter First Name">
        <input type="text" name="lname" id="lname" require placeholder="Enter Last Name">
        <input type="submit" value="Send Data">
    </form>
    <hr>
    <h1>Delete Method</h1>
    <form action="/deleteprocess" method="post">
        @csrf
        {{method_field("delete")}}
        <input type="text" name="fname" id="fname" require placeholder="Enter First Name">
        <input type="text" name="lname" id="lname" require placeholder="Enter Last Name">
        <input type="submit" value="Send Data">
    </form>
    <hr>
    <h1>File Upload</h1>
    <form action="/uploadprocess" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file1" id="file1" require placeholder="Select File for Upload">
        <input type="submit" value="Send Data">
    </form>
    <hr>
    
</body>
</html>