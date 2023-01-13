@extends('dashboard.header')

@section('content')

<h4>Details of Employee</h4>

<div>
    <strong>Name:</strong>
    {{ $employee->name }}
</div>
<div>
    <strong>Email:</strong>
    {{ $employee->email }}
</div>
<div>
    <strong>Gender:</strong>
    {{ $employee->gender }}
</div>
<div>
    <strong>Address:</strong>
    {{ $employee->address }}
</div>
<div>
    <strong>Mobile No:</strong>
    {{ $employee->mobile }}
</div>

@endsection