<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World - Laravel & Bootstrap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Hello World!</h1>
            <p class="lead">This is a simple Laravel Blade template using Bootstrap.</p>
            <hr class="my-4">
            <p>You can customize this template to build your Laravel applications.</p>
        </div>
        @include('usuarios.lista', ['array'=>$array])
        @includeWhen(1 == 1, 'usuarios.lista', ['array'=>$array])
    </div>

    @php
        for($i=0;$i<10;$i++){
            echo($i);
        }
    @endphp

    {{-- This comment will not be present in the rendered HTML --}}

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
