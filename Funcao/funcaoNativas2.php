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
        # Funcao Nativas Para Tarefas Matematicas

        /*
            # ceil -> Arredonda o valor pra cima
            # floor -> Arredonda o valor pra baixo
            # round -> Arredonda o valor com base nas casas decimais
            # rand -> Gera um valor aleatorio
            # sqrt -> Retorna a raiz quadrada
        */

        $numero = 18.6;
        $quebra = '<br />';
        $linha = '<hr />';

        # ceil
        echo ceil($numero);
        echo $quebra;

        echo $linha;

        # floor
        echo floor($numero);
        $quebra;

        echo $linha;

        # round
        echo round($numero);
        $quebra;

        echo $linha;

        # rand
        echo rand(10, 20);
        echo $quebra . getrandmax();
        $quebra;

        echo $linha;

        # sqrt
        echo sqrt(3);
        $quebra;

        
    ?>
</body>
</html>