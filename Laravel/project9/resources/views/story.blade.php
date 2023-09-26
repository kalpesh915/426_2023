<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story</title>
    @include("cdn")
</head>
<body>
    <div class="container-fluid">
        <h1 class="bg-primary text-center p-4 text-white">
            Title : {{__('story.title')}}
        </h1>

        <div class="p-4 bg-success text-white">
            {{__('story.story')}}
        </div>

        <h3 class="bg-info text-white p-4">  
            Moral : {{__('story.moral'  )}}
        </h3>
    </div>
</body>
</html>