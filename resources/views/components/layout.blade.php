<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <link rel="shortcut icon" href="{{ asset('images/library-icon.svg')}}" type="image/x-icon">
    <title>{{$title}}</title>
</head>

<body>
    <div class="cabecalho d-flex justify-content-center align-items-center p-4 gap-5">
        <h1 class="display-3">Library in Laravel</h1>
        <img src="{{asset('images/laravel-logo.svg')}}" alt="">
        
    </div>
    <hr id="layoutLine">
    <!-- content here -->
    {{$slot}}
</body>

</html>