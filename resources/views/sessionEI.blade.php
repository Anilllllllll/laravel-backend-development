@if(session()->has('name'))
    <p>Welcome, {{ session('name') }}</p>
    <a href="/logout">Logout</a>
@else
    <p>Welcome</p>
    <a href="/login">Login</a>
@endif