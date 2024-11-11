<!DOCTYPE html>
<html lang="en" class="font-geist">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&display=swap" rel="stylesheet">
    <title>{{ $title ?? 'Tica Beans' }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <x-header class="container mx-auto">
    </x-header>
    <main>
        {{ $slot }}
    </main>
</body>

</html>
