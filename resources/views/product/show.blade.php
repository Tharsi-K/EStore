@extends('dashboard.header')

@section('content')

<h4>Product Details</h4>

<div>
    <strong>Name:</strong>
    {{ $product->name }}
</div>
<div>
    <strong>Detail:</strong>
    {{ $product->detail }}
</div>
<div>
    <strong>Price:</strong>
    {{ $product->price }}
</div>

@endsection