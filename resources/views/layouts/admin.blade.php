<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            position: fixed;
            background: #1f2937;
            padding-top: 20px;
        }

        .sidebar a, .sidebar button {
            display: block;
            color: #fff;
            padding: 12px 20px;
            text-decoration: none;
            width: 100%;
            text-align: left;
            background: none;
            border: none;
        }

        .sidebar a:hover, .sidebar button:hover {
            background: #374151;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }

        hr {
            border-color: #374151;
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

    <h4 class="text-white text-center mb-4">Admin Panel</h4>

    @auth

        <a href="{{ route('dashboard') }}">🏠 Dashboard</a>
        <a href="{{ route('products.index') }}">📦 Products</a>
        <a href="{{ route('products.create') }}">➕ Add Product</a>
        <a href="{{ route('categories.index') }}">🏷 Categories</a>

        <hr>

        <a href="{{ route('profile.edit') }}">👤 Profile</a>

        <!-- LOGOUT -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">🚪 Logout</button>
        </form>

    @else

        <a href="{{ route('login') }}">🔐 Login</a>
        <a href="{{ route('register') }}">📝 Register</a>

    @endauth

</div>

<!-- CONTENT -->
<div class="content">
    @yield('content')
</div>

</body>
</html>