<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Crear Usuario</h1>

        <form action="/createdireccion" method="POST">
            @csrf

            <div class="form-group">
                <label for="calle">Calle</label>
                <input type='text' id='calle' name='calle' placeholder='Calle' class='form-control' />
            </div>

            <div class="form-group">
                <label for="numero">Número</label>
                <input type='text' id='numero' name='numero' placeholder='Número' class='form-control' />
            </div>

            <button type="submit" class="btn btn-primary">Crear Usuario</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
