<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/app.css">
    <title>@yield('title')</title>
</head>
<body class="bg-palette_blue">
    <div class="w-2/3 mx-auto bg-blue-500">
        @yield('main')
    </div>
</body>
</html>
