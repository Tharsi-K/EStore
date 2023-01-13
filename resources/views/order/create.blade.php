@extends('dashboard.header')

@section('content')

<form action="{{ route('orders.store') }}" method="POST">
    @csrf

    <div>
        <strong>Product Name: </strong>
        {{ $product->name }}
    </div>
    <div>
        <strong>Employee Name: </strong>
        <select name="employee_id">
            @foreach($employees as $emp){
                <option value="{{ $emp->id }}">{{ $emp->name }}</option>
            }
            @endforeach
        </select>
    </div>
    <div>
        <strong>Price: </strong>
        {{ $product->price }}
    </div>
    <input type="hidden" name="customer_id" value="{{ Auth::user()->id }}">
    <input type="hidden" name="product_id" value="{{ $product->id }}">
    <button type="submit" name="order">Order</button><br/>
    
</form>

@endsection