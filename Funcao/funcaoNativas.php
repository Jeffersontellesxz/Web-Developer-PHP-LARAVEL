<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funcao Nativas</title>
</head>
<body>
    <?php
        # Funcao Nativas Para Textos

        /* 
            # strtolower -> Caracteres em minusculos
            # strtoupper -> caracteres em maiusculos
            # ucfirst -> Primeiro caracter em maiusculo
            # strlen -> Quantidade de caracteres de uma string
            # str_replace -> Substitui uma cadeia de caracters por outra de uma string
            # substr -> retorna parte de uma string
        */

        $quebra = '<br />';
        $linha = '<hr />';
        $texto = 'Curso completo de PHP';

        # strtolower
        echo $texto;
        echo $quebra;
        echo strtolower($texto);

        echo $linha;

        # strtoupper
        echo $texto;
        echo $quebra;
        echo strtoupper($texto);

        echo $linha;

        # ucfirst
        echo $texto;
        echo $quebra;
        echo ucfirst($texto);

        echo $linha;

        # strlen
        echo $texto;
        echo $quebra;
        echo strlen($texto);

        echo $linha;

        # str_replace
        echo $texto;
        echo $quebra;
        echo str_replace('PHP', 'JavaScript', $texto);

        echo $linha;

        # substr
        echo $texto;
        echo $quebra;
        # Curso completo de PHP
        echo substr($texto, 0, 14) . ' ...';
    ?>
</body>
</html>