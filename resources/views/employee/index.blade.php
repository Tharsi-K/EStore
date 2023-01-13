@extends('dashboard.header')

@section('content')

<a href="{{ route('users.create') }}">Enroll new Employee</a>

<!-- success alert message -->
@if($message = Session::get('success'))
    <div>
        <p>{{ $message }}</p>
    </div>
@endif

<table border="1px">
    <tr>
        <td>No</td>
        <td>Name</td>
        <td>Email</td>
        <td>Mobile</td>
        <td>Actions</td>
    </tr>
    
    @foreach($employees as $employee)
    <tr>
        <td>{{ $employee->id }}</td>
        <td>{{ $employee->name }}</td>
        <td>{{ $employee->email }}</td>
        <td>{{ $employee->mobile }}</td>
        <td>
            <form action="{{ route('users.destroy', $employee->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <a href="{{ route('users.show', $employee->id) }}">Show</a>
                <a href="{{ route('users.edit', $employee->id) }}">Edit</a>
                <button type="submit" name="delete">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    
</table>
@endsection