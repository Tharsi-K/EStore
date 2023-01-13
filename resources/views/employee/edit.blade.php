@extends('dashboard.header')

@section('content')
<h4>Edit an Employee</h4>

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

<form action="{{ route('users.update', $employee->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <strong>Name:</strong>
        <input type="text" name="name" value="{{ $employee->name }}">
    </div>
    <div>
        <strong>Email:</strong>
        <input type="text" name="email" value="{{ $employee->email }}">
    </div>
    <div>
        <label for ="gender">Gender: </label>
        <select name="gender">
            <option value="m">Male</option>
            <option value="f">Female</option>
        </select>
    </div>
    <div>
        <strong>Address:</strong>
        <input type="text" name="address" value="{{ $employee->address }}">
    </div>
    <div>
        <strong>Mobile No:</strong>
        <input type="text" name="mobile" value="{{ $employee->mobile }}">
    </div>
    <div>
        <button type="sumbit" name="update">Update</button>
    </div>
    
</form>
@endsection