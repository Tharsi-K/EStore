<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Store</title>
</head>
<body>
    <div class="container">
        <h3>E-Store</h3>

        @if(Auth::user()->role == "admin")
            <div>
                {{ Auth::user()->name }}
                <a href="{{ route('products.index') }}">Products</a>
                <a href="{{ route('users.index') }}">Employees</a>
                <a href="{{ url('logout') }}">Logout</a>
            </div>
        @elseif(Auth::user()->role == "customer")
            <div>
                {{ Auth::user()->name }}
                <a href="{{ route('orders.index') }}">Place Orders</a>
                <a href="{{ url('logout') }}">Logout</a>
            </div>
        @elseif(Auth::user()->role == "employee")
            <div>
                {{ Auth::user()->name }}
                <a href="{{ route('myorder') }}">My Orders</a>
                <a href="{{ url('logout') }}">Logout</a>
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>