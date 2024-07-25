@extends('products.layout')

@section('content')

<div class="container text-center mb-4">
    <div class="row">
        <div class="col">
            <p class="h2">View Product</p>
        </div>
        <div class="col">
            <a href="{{ route('products.index') }}"><button type="button" class="btn btn-secondary">Back</button></a>
        </div>
    </div>
</div>

<div class="card text-center mx-auto px-4" style="max-width: 50%">
    <div class="card-header fw-bold mb-4">
      {{ $product->name }}
    </div>
    <div class="card-body mb-4">
      <p class="card-text">{{ $product->detail }}</p>
    </div>
</div>
@endsection