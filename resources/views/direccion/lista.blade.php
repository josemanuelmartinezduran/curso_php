<!doctype html>
<html lang='es'>

<head>
    <meta charset='utf-8'>
    <title></title>
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
    <div class='container'>
    <div class="jumbotron">
        <h1 class="display-4">Lista de direcciones</h1>
        <p class="lead">Laravel</p>
    </div>
        <a name="" id="" class="btn btn-primary" href="/createdireccion" role="button">Crear Direccion</a>
        <table class="table">
            <tbody>
                <tr>
                    <th>Calle</th>
                    <th>Número</th>
                    <th>Modificar</th>
                    <th>Eliminar</th>
                </tr>
                @foreach ($direcciones as $u)
                    <tr>
                        <td>{{ $u['calle'] }}</td>
                        <td>{{ $u['numero'] }}</td>
                        <td><a class="btn btn-primary" href="/updateusuario/{{ $u['id'] }}">Modificar Direccion</a></td>
                        <td><a class="btn btn-primary" href="/deleteusuario/{{ $u['id'] }}">Eliminar Direccion</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
