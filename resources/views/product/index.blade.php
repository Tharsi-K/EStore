@extends('dashboard.header')

@section('content')

<a href="{{ route('products.create') }}">Create New Product</a>

<!-- success alert message -->
@if($message = Session::get('success'))
    <div>
        <p>{{ $message }}</p>
    </div>
@endif

<table border="1px">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Detail</th>
        <th>Price</th>
        <th>Action</th>
    </tr>

    @foreach($products as $product)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->detail }}</td>
        <td>{{ $product->price }}</td>
        <td>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <a href="{{ route('products.show', $product->id) }}">Show</a>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                <button type="submit" name="delete">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>


@endsection