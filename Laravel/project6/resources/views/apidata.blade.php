<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Data From API</title>
    @include("cdn")
</head>
<body>
    <div class="container-fluid">
        <h1 class="bg-primary text-center text-white p-4">Data From API</h1>

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Rating</th>
                        <th>Stock</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Image</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td>{{$product['id']}}</td>
                            <td>{{$product['title']}}</td>
                            <td>{{$product['description']}}</td>
                            <td>{{$product['price']}}</td>
                            <td>{{$product['discountPercentage']}}</td>
                            <td>{{$product['rating']}}</td>
                            <td>{{$product['stock']}}</td>
                            <td>{{$product['brand']}}</td>
                            <td>{{$product['category']}}</td>
                            <td><img src="{{$product['thumbnail']}}" class="w-25"></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>