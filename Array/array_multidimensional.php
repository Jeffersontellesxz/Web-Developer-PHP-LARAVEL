<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Multidimensional</title>
</head>
<body>

    <?php
        $lista_coisas = [];

        $lista_coisas['frutas'] = [1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva'];
        $lista_coisas['pessoas'] = [1 => 'Joao', 2 => 'Jose', 3 => 'Maria'];

        # Recuperar no array frutas o Morango
        echo '<pre>';
            print_r($lista_coisas['frutas'][3]);
        echo '</pre>';

        echo '<hr />';

        # Recuperar no array pessoas o jose
        echo '<pre>';
            print_r($lista_coisas['pessoas'][2]);
        echo '</pre>';
    ?>
    
</body>
</html>