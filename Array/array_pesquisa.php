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

        //  in_array => True or False
        //  array_search => Retorna o indice do valor pesquisado

        $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];

        // echo '<pre>';
        // print_r($lista_frutas);
        // echo '</pre>';

        // $existe = array_search('Uva', $lista_frutas);

        // echo '<hr />';
        // echo array_search('Morango', $lista_frutas); # posicao [2]

        // if($existe != null) {
        //     echo 'Sim, o valor existe no array';
        // } else {
        //     echo 'Não, o valor pesquisado nao existe no array';
        // }

        $lista_coisas = [
            'frutas' => $lista_frutas,
            'pessoas' => ['Joao', 'Maria']
        ];

        echo '<pre>';
        print_r($lista_coisas);
        echo '</pre>';

        echo in_array('Joao', $lista_coisas);
    ?>
</body>
</html>