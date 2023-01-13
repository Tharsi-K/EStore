<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="{{ url('login') }}">
        
        <!-- Authention Error -->
        @if($message = Session::get('error'))
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

        @csrf
        <div>
            <label>Email</label>
            <input type='text' name='email'>
        </div>
        <div>
            <label>Password</label>
            <input type='Password' name='password'>
        </div>
        <button type="sumbit" name='login'>LogIn</button><br/>
        <a href="{{ url('/register') }}">Register Now!</a>
    </form>
</body>
</html>