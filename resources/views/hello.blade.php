<!doctype html>
<html lang='es'>

<head>
    <meta charset='utf-8'>
    <title>Hola</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
        integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
    <script src='https://code.jquery.com/jquery-3.4.1.slim.min.js'
        integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n' crossorigin='anonymous'>
    </script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'
        integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo' crossorigin='anonymous'>
    </script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'
        integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6' crossorigin='anonymous'>
    </script>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
</head>

<body>
@if(count($array)>1)
    <span>Mas de un elemento</span>
@elseif(count($array)>0)
    <span>Solo un elemento</span>
@else
    <span>Arreglo vacío</span>
@endif

@unless(count($array)>0)
    No tiene un elemento
@endunless

@isset($variable)
    La variable existe
@endisset
@empty($array)
    Arreglo vacío
@endempty
 <div class="jumbotron">
    <h1 class="display-4">Hola</h1>
    <p class="lead">Mundo</p>
    <hr class="my-4">
    <p>{{ $message }}</p>
    <p> {{ $test }}
 </div>
 Jos&eacute;
 <ul>
    @foreach ($array as $a)
        <li>Hello, {{ $a }} </li>
    @endforeach
    <?php echo json_encode($myjson) ?>;
    {{ Illuminate\Support\Js::from($myjson) }}
 </ul>
</body>

</html>
