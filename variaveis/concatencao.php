<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Concatenação</title>
</head>
<body>
  <?php
    $nome = 'Jefferson';
    $cor = 'azul';
    $idade = 25;
    $atividade = 'Programar';

    // Concatenando com o operador "."

    echo 'Ola ' . $nome . ', vi que sua cor favorita e ' . $cor . ', e estou vendo que voce tem ' . $idade . ', e gosta de ' . $atividade;

    // Concatenando usando aspas duplas ""

    echo '<br />';

    echo "Olá $nome vi que sua cor favorita e $cor, e estou vendo que a sua idade e $idade e gosta de $atividade";
  ?>
</body>
</html>