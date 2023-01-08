<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<ul>";
    foreach ($data['artigos'] as $value) {
        echo "
            <div>
                <h1>Título: {$value['titulo']}</h1>
                <h4>{$value['conteudo']}</h4>
            </div>";
    }
    echo "</ul>";

    ?>
</body>

</html>