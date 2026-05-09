<!DOCTYPE html>
<html>
<head>
    <title>Магазин Admin</title>

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

        .sidebar a {
            display: block;
            color: #fff;
            padding: 12px 20px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #374151;
        }

        .content {
            margin-left: 220px;
            padding: 20px;
        }

        .topbar {
            background: white;
            padding: 10px 20px;
            margin-left: 220px;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <h4 class="text-white text-center mb-4">Admin</h4>

    <a href="/products">📦 Продукти</a>
    <a href="/products/create">➕ Добави продукт</a>
</div>

<!-- TOPBAR -->
{{-- <div class="topbar"> --}}
    {{-- Магазин система --}}
{{-- </div> --}}

<!-- CONTENT -->
<div class="content">
    @yield('content')
</div>

</body>
</html>