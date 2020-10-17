<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">        
        <link rel="stylesheet" href="/css/welcome.css">

        <title>Series Laravel</title>
    </head>
    <body>

        <h1>CADASTRO DE SERIES</h1>

        <div class="series">
            <a href="<?= url('/series/cadastrar') ?>">Cadastrar Séries</a>
        </div>

        <div class="series">
            <a href="<?= url('/series') ?>">Visualizar Séries</a>
        </div>

        
    </body>
</html>
