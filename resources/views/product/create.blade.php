@extends('dashboard.header')

@section('content')
<h4>Add a new Product</h4>

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

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div>
        <strong>Name:</strong>
        <input type="text" name="name">
    </div>
    <div>
        <strong>Detail:</strong>
        <textarea style="height:150px" name="detail"></textarea>
    </div>
    <div>
        <strong>price:</strong>
        <input type="text" name="price">
    </div>
    <div>
        <button type="sumbit" name="add">Add</button>
    </div>
    
</form>
@endsection