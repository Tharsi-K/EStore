@extends('dashboard.header')

@section('content')
<h4>Edit a Product</h4>

<!-- Authentication Error -->
@if($errors->any())
<div>
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <strong>Name:</strong>
        <input type="text" name="name" value="{{ $product->name }}">
    </div>
    <div>
        <strong>Detail:</strong>
        <textarea style="height:150px" name="detail">{{ $product->detail }}</textarea>
    </div>
    <div>
        <strong>price:</strong>
        <input type="text" name="price" value="{{ $product->price }}">
    </div>
    <div>
    <button type="sumbit" name="update">Update</button>
    </div>
    
</form>
@endsection