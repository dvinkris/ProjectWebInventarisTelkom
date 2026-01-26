<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Inventaris Telkom</title>
</head>
<body>
<header>
    <h2>Inventaris Aset Telkom</h2>
    <nav>
        <a href="{{ route('alkers.index') }}">Alker</a>
        <a href="{{ route('salkers.index') }}">Salker</a>

        @auth
            <a href="/dashboard">Dashboard</a>

            <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                @csrf
                <button class="logout-btn">Logout</button>
            </form>
        @endauth

        @guest
            <a href="/login">Login</a>
        @endguest
    </nav>
</header>

<div class="container">
    @yield('content')
</div>
    @yield('scripts')
</body>
</html>
