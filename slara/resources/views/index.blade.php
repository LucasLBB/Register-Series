<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">        
    <link rel="stylesheet" href="/css/index.css">
    <title>Séries Cadastradas</title>
</head>
<body>

<h1>Series Cadastradas</h1>

    @if(!empty($properties)) 
        <table>
            <tr>
                <td>Série</td>
                <td>Descrição</td>
                <td>Temporadas</td>
                <td>Disponível</td>
             </tr>
    @foreach($properties as $property) 
            <tr>
                <td>{{ $property->name_series }}</td>
                <td>{{ $property->description }}</td>
                <td>{{ $property->seasons }}</td>
                <td>{{ $property->available }}</td>
            </tr>
    @endforeach
        </table>
    @endif

    <div>
        <a href="<?= url('/series/cadastrar') ?>">Cadastrar nova Série</a>
    </div>
</body>
</html>

