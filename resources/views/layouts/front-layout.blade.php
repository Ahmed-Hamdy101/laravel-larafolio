<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'Frontend' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 h-full">
<div class=" w-full bg-[#101726]">
    {{ $slot }}
</div>
</body>
</html>
