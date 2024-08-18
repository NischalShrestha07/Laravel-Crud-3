<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <h1 class="text-danger">Products Details</h1>
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>

        </div>
        <div class="row">
            <div class="container"
                style="border: 5px solid black;
            margin: 7px;border-radius: 10px;padding: 13px">
                <h3>Name: <span class="text-success">{{ $product->name }}</span></h3>
                <h3>Category: <span class="text-success">{{ $product->category }}</span></h3>
                <h3>Unit: <span class="text-success">{{ $product->unit }}</span></h3>
                <h3>Description: <span class="text-success">{{ $product->description }}</span></h3>
                <h3>Price: <span class="text-success">{{ $product->price }}</span></h3>

            </div>

        </div>
        <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display: inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

    </div>

</body>

</html>
