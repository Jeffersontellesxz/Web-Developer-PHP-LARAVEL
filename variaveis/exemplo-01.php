<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Curso PHP</title>
</head>
<body>
  
  <?php
    // String
    $nome = 'Jefferson';

    // Number Int
    $idade = 25;

    // Number Float
    $peso = 75.5;

    // Booleans
    $estudante = true;
  ?>

  <h1>Ficha Cadastral</h1>
  <br />
  <p>Nome: <?= $nome ?></p>
  <p>Idade: <?= $idade ?></p>
  <p>Peso: <?= $peso ?></p>
  <p>Estudante: <?= $estudante ?></p>

</body>
</html>