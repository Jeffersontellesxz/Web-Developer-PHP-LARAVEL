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
    /*
        # Sequenciais (Numericos)
        # $listas_frutas = array('Banana', 'Maça', 'Morango', 'Uva');
        $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];

        $listas_frutas[] = 'Abacaxi';

        // echo '<pre>';
        // var_dump($listas_frutas);
        // echo '</pre>';

        // echo '<hr />';

        // echo '<pre>';
        // print_r($listas_frutas);
        // echo '</pre>';

        echo $lista_frutas[2];
    */

        # Associativos
        $lista_frutas = [
            'a' => 'Banana',
            'b' => 'Maça',
            'c' => 'Morango',
            'd' =>  'Uva'
        ];

        $lista_frutas['e'] = 'Abacaxi';

        echo '<pre>';
            var_dump($lista_frutas);
        echo '</pre>';
        
        echo $lista_frutas['d'];

    ?>
</body>
</html>