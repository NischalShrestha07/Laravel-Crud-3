<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WELCOME TO CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="navbar">
            <h1>PRODUCTS</h1>
            <a href="{{ route('products.create') }}" class="h1 btn btn-primary btn-sm">Add New Product</a>
        </div>
        @if (@session('success'))
            <span class="alert alert-success">{{ session('success') }}</span>
        @endif
        <br> <br>
        <table class='table table-striped table-sm table-responsive'>
            <thead>
                <tr class="h5">
                    <td>ID</td>
                    <td>Name</td>
                    <td>Category</td>
                    <td>Unit</td>
                    <td>Description</td>
                    <td>Price</td>
                    <td>Action</td>
                </tr>

            </thead>
            <tbody>

                @foreach ($product as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->category }}</td>
                        <td>{{ $item->unit }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>

                        <td>
                            <a href="{{ route('products.show', $item) }}" class="btn btn-dark">View</a>
                            <a href="{{ route('products.edit', $item) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('products.destroy', $item) }}" method="POST"
                                style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Do you want to delete it?')"
                                    class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</body>

</html>
