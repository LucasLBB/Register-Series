<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">        
        <link rel="stylesheet" href="/css/create.css">
        <title>Cadastrar Série</title>
    </head>
    <body>
       <form action="<?= url('/series/restrict'); ?>" method="post">

            <?= csrf_field(); ?>

            <h1>Cadastre Novas Séries</h1>

            <div id="form">
       
                <input type="text" name="serie_name" id="serie_name" placeholder="Série">

                <textarea name="description" id="description" cols="30" rows="10" placeholder="Descrição"></textarea>

                <input type="text" name="seasons" id="seasons" placeholder="Temporadas">

                <input type="text" name="available" id="available" placeholder="Disponível">

                <button type="submit">Cadastrar Série</button>
                <a href="<?= url('/series'); ?>">voltar</a>

            </div>
       </form>
       
    </body>
</html>
