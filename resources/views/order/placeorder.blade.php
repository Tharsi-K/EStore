@extends('dashboard.header')

@section('content')

<table border="1px">
    <tr>
        <td>No</td>
        <td>Name</td>
        <td>Detail</td>
        <td>Price</td>
        <td>Actions</td>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->detail }}</td>
        <td>{{ $product->price }}</td>
        <td>
            <a href="{{ route('products.order', $product->id) }}">Place order</a>
        </td>
    </tr>
    @endforeach
</table>

@endsection