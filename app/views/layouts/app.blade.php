<head>
    <title>Logistics MVC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>

<body>
    <nav class="container">
        <ul>
            <li><strong><a href="/">Logistics MVC</a></strong></li>
        </ul>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="/drivers">Drivers</a></li>
            <li><a href="#">Shipments</a></li>
            <li><a href="#">Packages</a></li>
            <li><a href="#">Assignments</a></li>
        </ul>
    </nav>
    <main class="container">
        @yield('content')
    </main>
</body>
