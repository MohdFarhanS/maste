<!DOCTYPE html>
<html>
<head>
    <title>CRUD Master</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="p-4 font-sans">
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>
</html>