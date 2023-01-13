@extends('dashboard.header')

@section('content')

<table border="1px">
    <tr>
        <th>No</th>
        <th>Product Name</th>
        <th>Detail</th>
        <th>Price</th>
        <th>Customer Name</th>
        <th>Customer Address</th>
        <th>Customer Mobile</th>
        <th>Date</th>
    </tr>

    @foreach($data as $order)
    <tr>
        <td>{{ $order->id }}</td>
        <td>{{ $order->prod_name }}</td>
        <td>{{ $order->detail }}</td>
        <td>{{ $order->price }}</td>
        <td>{{ $order->name }}</td>
        <td>{{ $order->address }}</td>
        <td>{{ $order->mobile }}</td>
        <td>{{ $order->created_at }}</td>
    </tr>
    @endforeach
</table>

@endsection