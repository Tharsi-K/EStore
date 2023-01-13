@extends('dashboard.header')

@section('content')
<h4>Enroll a new Employee</h4>

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

<form action="{{ route('users.store') }}" method="POST">
    @csrf

    <div>
        <label for ="name">Name: </label>
        <input type="text" name="name"><br/><br/>
    </div>
    <div>
        <label for ="email">Email: </label>
        <input type="email" name="email"><br/><br/>
    </div>
    <div>
        <label for ="gender">Gender: </label>
        <select name="gender">
            <option value="m">Male</option>
            <option value="f">Female</option>
        </select>
    </div>
    <div>
        <label for ="address">Address: </label>
        <input type="text" name="address"><br/><br/>
    </div>
    <div>
        <label for ="mobile">Mobile No: </label>
        <input type="text" name="mobile"><br/><br/>
    </div>
    <div>
        <label for ="password">Password: </label>
        <input type="password" name="password"><br/><br/>
    </div>
    <input type="hidden" name="role" value="employee">
    <button type="submit" name="enroll">Enroll</button><br/>
    
</form>
@endsection