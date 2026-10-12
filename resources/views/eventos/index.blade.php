<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Eventos</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>
    <body>
        <tbody>
            @forelse ($eventos as $evento)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $evento['titulo'] }}</td>
                    <td>{{ date('d/m/Y',strtotime($evento['data'])) }}</td>
                    <td>{{ $evento['vagas'] - $evento['inscritos'] }}</td>
                </tr>
            @empty
                <tr><td colspan="4">Não há eventos para mostrar.</td></tr>
            @endforelse
        </tbody>
    </body>
</html>