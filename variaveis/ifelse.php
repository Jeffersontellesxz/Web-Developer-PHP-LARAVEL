<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>If e Else</title>
</head>
<body>

  <?php 
    /*-------------------------------------
    | Estrutura de controle
    |--------------------------------------
    | 
    | => BLOCOS
    |    Um bloco consiste em varios comandos agrupadas com objetivos de relaciona-los
    |  com determinado comando ou funcao. Em comando como if, for, while, switch e em
    |  declaraçoes de funcoes de bloco podem ser utilizados para permitir que um comando
    |  faça parte do contexto desejado. Blocos em PHP sao delimitados pelos caracteres
    |  "{"e"}".
    |  
    | => EXEMPLO
    |
    |    if ($x == $y) {
    |       comando1;
    |       comando2;          
    |     }
    |
    */

    if(5 !== 5) {
      echo 'Verdadeiro';
    } else {
      echo 'Falso';
    }


  ?>
  
</body>
</html>