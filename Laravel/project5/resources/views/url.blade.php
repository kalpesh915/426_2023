<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include("cdn")
</head>
<body>
    @include("menu")

    <div class="container-fluid">
        <h1 class="bg-primary text-white text-center p-4">URL Blade File</h1>
        <p>Current URL is {{URL::current()}}</p>
        <p>Current Full URL is {{URL::full()}}</p>
        <p><a href="{{URL::to('/')}}">Home</a></p>
        <p><a href="{{URL::previous()}}">Previous</a></p>
    </div>
</body>
</html>