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
    $usuario = true;
    $valor_compra = 320;

    $valor_frete = 50;
    $desconto_frete = true;
    
    if($usuario == true && $valor_compra >= 400) {
      $valor_frete = 0;

    } else if($usuario && $valor_compra >= 300) {
      $valor_frete = 10;

    } else if($usuario && $valor_compra >= 100) {
      $valor_frete = 25;

    } else {
      $desconto_frete = false;
    }
  ?>

  <h1>Detalhes do pedido</h1>

  <p>possui cartao da loja ? <?= $usuario ? 'SIM' : 'NAO'; ?>
  </p>

  <p>Valor da compra <?= $valor_compra ?></p>

  <p>Recebeu desconto no frete? <?= $desconto_frete ? 'SIM' : 'NAO' ?>
  </p>

  <p>Valor da frete: <?= $valor_frete  ?></p>

</body>
</html>