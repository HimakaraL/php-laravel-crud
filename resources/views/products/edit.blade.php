@extends('products.layout')

@section('content')

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <p class="h2">Edit Product</p>
            </div>
            <div class="col">
                <a href="{{ route('products.index') }}"><button type="button" class="btn btn-secondary">Back</button></a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>There were some erros with your input!</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST" class="mx-auto px-4" style="max-width: 80%">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label fw-bold">Product name</label>
            <input type="text" name="name" value="{{ $product->name }}" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label fw-bold">Description</label>
            <input type="text" name="detail" value="{{ $product->detail }}" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="text-center"> <button type="submit" class="btn btn-primary">Submit</button></div>
    </form>


@endsection
