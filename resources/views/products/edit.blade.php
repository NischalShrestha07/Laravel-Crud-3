<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <h1>Edit Product</h1>
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back</a>
        </div>

        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group" style="margin: 25px">
                <label for="name" class="h3">Product Name</label>
                <input type="text" id="name" name="name" class="form-control"
                    value="{{ old('name', $product->name) }}">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group" style="margin: 25px">
                <label for="category" class="h3">Product Category</label>
                <input type="text" id="category" name="category" class="form-control"
                    value="{{ old('category', $product->category) }}">

                @error('category')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group" style="margin: 25px">
                <label for="unit" class="h3">Product Unit</label>
                <input type="text" id="unit" name="unit" class="form-control"
                    value="{{ old('unit', $product->unit) }}">
                @error('unit')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group" style="margin: 25px">
                <label for="Description" class="h3">Product Description</label>
                <input type="text" id="description" name="description" class="form-control"
                    value="{{ old('description', $product->description) }}">
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group" style="margin: 25px">
                <label for="price" class="h3">Product Price</label>
                <input type="text" id="price" name="price" class="form-control"
                    value="{{ old('price', $product->price) }}">
                @error('price')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group" style="margin: 25px">
                <button type="submit" class="btn btn-success">Save</button>

            </div>
        </form>
    </div>


</body>

</html>
