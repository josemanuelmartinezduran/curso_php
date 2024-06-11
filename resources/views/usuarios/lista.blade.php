<div class="jumbotron">
    <h1 class="display-4">Lista de usuarios</h1>
    <p class="lead">Curso PhP</p>
    <hr class="my-4">
    <p><table class="table table-light" border='1'>
    <tbody>
        <tr>
            @foreach($array as  $value)
                <td >{{ $value }}</td>
            @endforeach

        </tr>
    </tbody>
</table>
</p>
</div>
