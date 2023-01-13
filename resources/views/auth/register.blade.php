<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <!-- Authention Error -->
        @if($message = Session::get('error'))
            <div>
                <button>><</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        @if($message = Session::get('success'))
            <div>
                <button>><</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <!-- Validation Error -->
        @if($errors->any())
        <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br/>
        @endif
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
        <input type="hidden" name="role" value="customer">
        <button type="submit" name="submit">Sign Up</button><br/>
        <a href="{{ url('/') }}">I alredy have an account</a>
    </form> 
</body>
</html>