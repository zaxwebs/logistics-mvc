<head>
    <title>Logistics MVC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
    <link rel="stylesheet" href="{{ PublicPath('assets/css/styles.css') }}">
</head>

<body>
    <nav class="container-fluid">
        <ul>
            <li><strong><a href="/">Logistics MVC</a></strong></li>
        </ul>
        <ul>
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="/users">Users</a></li>
            <li><a href="/drivers">Drivers</a></li>
            <li><a href="/shipments">Shipments</a></li>
            <li><a href="/packages">Packages</a></li>
            <li><a href="/assignments">Assignments</a></li>
        </ul>
    </nav>
    <main class="container-fluid">
        @yield('content')
    </main>
</body>
