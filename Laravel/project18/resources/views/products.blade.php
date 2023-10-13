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
        <h1 class="bg-primary text-center text-white p-4">Products Blade File</h1>
        <x-footercomponent>
            <x-slot:user>Harshil Khakhi</x-slot:user>
            <x-slot:city>Australia</x-slot:city>
        </x-footercomponent>
    </div>
</body>
</html>