<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <h1>Create Product</h1>
            <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm">Back</a>
        </div>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group" style="margin: 25px">
                <label for="name" class="h3">Product Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Product Name">

            </div>
            <div class="form-group" style="margin: 25px">
                <label for="category" class="h3">Product Category</label>
                <input type="text" id="category" name="category" class="form-control"
                    placeholder="Product category">

            </div>
            <div class="form-group" style="margin: 25px">
                <label for="unit" class="h3">Product Unit</label>
                <input type="text" id="unit" name="unit" class="form-control" placeholder="Product Unit">

            </div>
            <div class="form-group" style="margin: 25px">
                <label for="Description" class="h3">Product Description</label>
                <input type="text" id="description" name="description" class="form-control"
                    placeholder="Product Description">

            </div>
            <div class="form-group" style="margin: 25px">
                <label for="price" class="h3">Product Price</label>
                <input type="text" id="price" name="price" class="form-control" placeholder="Product Price">

            </div>
            <div class="form-group" style="margin: 25px">
                <button type="submit" class="btn btn-success">Save</button>

            </div>
        </form>
    </div>

</body>

</html>
