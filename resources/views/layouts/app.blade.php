<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Calendar</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body {
            padding: 30px;
            font-family: Arial, sans-serif;
        }

        #calendar {
            max-width: 1100px;
            margin: 0 auto;
            min-height: 700px;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>