<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <title>{{$title}}</title>
</head>
<body>
    <!-- content here -->
    {{$slot}}
</body>
</html>