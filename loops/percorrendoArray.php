<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        # Percorrendo arrays com while, do while e for

        $registros = [
            ['titulo' => 'Titulo noticia 1', 'conteudo' => 'Conteudo noticia 1'],
            ['titulo' => 'Titulo noticia 2', 'conteudo' => 'Conteudo noticia 2'],
            ['titulo' => 'Titulo noticia 3', 'conteudo' => 'Conteudo noticia 3'],
            ['titulo' => 'Titulo noticia 4', 'conteudo' => 'Conteudo noticia 4']
        ];

        echo '<pre>';
        print_r($registros);
        echo '</pre>';

        echo '<br><br><br>';

        echo 'O array possui: ' . count($registros) . ' registros';
        echo '<br />';
        
        $idx = 0;

        /*
        while($idx < count($registros)) {
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<h3>' . $registros[$idx]['conteudo'] . '</h3>';
            echo '<hr />';
            $idx++;
        }
        */

        for($idx; $idx < count($registros); $idx++) {
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<h3>' . $registros[$idx]['conteudo'] . '</h3>';

            echo '<hr />';
        }
    ?>
</body>
</html>