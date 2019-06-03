<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Casting</title>
</head>
<body>
  <?php
        # gettype() => retorna o tipo da variavel
        # $valor = 10.35;
        # $valor2 = (int) $valor; 
        # float, double, real, int, integer

        $valor = false;
        $valor2 = (string) $valor;

        echo $valor . " " . gettype($valor);
        echo '<br/>';
        echo $valor2 . " " . gettype($valor2)
?>
</body>
</html>