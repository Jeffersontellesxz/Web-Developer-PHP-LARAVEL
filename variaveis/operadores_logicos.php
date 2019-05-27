<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Operadores logicos</title>
</head>
<body>
  
  <?php
    /*---------------------------------
    |  OPERADORES LÓGICOS
    |----------------------------------
    |
    |  Utilizados para inteiros representando valores booleanos
    |  
    |  => and "e" logico
    |  => or "ou" logico
    |  => xor "nao" inversao 
    |  => && "e" logico
    |  => || "ou" logico
    |
    |  => E: && ou AND -> retorna verdadeiro se todos os resultados forem verdadeiros
    |  => OU: || ou OR -> retorna verdadeiro se pelo menos um for verdadeiro
    |  => XOR: XOR -> retorna verdadeiro se uma das expressoes for verdadeira e outra falsa
    |  => ! -> inverte o resultado retornado pelo expressao 
    */
    
    // Falso
    if (5 == 3 && 10 > 3) {
      echo 'Verdadeiro';
    } else {
      echo 'Falso';
    }

    echo '<br />';

    // Verdadeiro
    if (5 == 3 || 10 > 3) {
      echo 'Verdadeiro';
    } else {
      echo 'Falso';
    }

    echo '<br />';

    // Verdadeiro
    if (5 == 3 XOR 10 > 3) {
      echo 'Verdadeiro';
    } else {
      echo 'Falso';
    }

    echo '<br />';

    // Falso
    if (!('a' == 'a')) {
      echo 'Verdadeiro';
    } else {
      echo 'Falso';
    }
  ?>



</body>
</html>