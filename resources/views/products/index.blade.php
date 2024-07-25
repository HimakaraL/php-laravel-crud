@extends('products.layout')

@section('content')
    <div class="container text-center mb-3">
        <div class="row">
            <div class="col">
                <p class="h2">All Products</p>
            </div>
            <div class="col">
                <a href="{{ route('products.create') }}"><button type="button" class="btn btn-success">Create
                        new!</button></a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mx-auto px-4" style="max-width: 80%">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-dark mx-auto px-4 mb-4" style="max-width: 80%">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Details</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->detail }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>
                        <a class="btn btn-warning" href="{{ route('products.edit', $product->id) }}">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="text-center vh-25">
        {{ $products->links() }}
    </div>
   
@endsection
