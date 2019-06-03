<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Constantes</title>
</head>
<body>
  
  <?php
    /* ------------------------------------
    |  Declarando constantes pre-definidas
    |  ------------------------------------
    |
    |  O PHP possui algumas constantes pré-definidas, indicando a versão do PHP, o Sistema
    |  Operacional do servidor, o arquivo em execução, e diversas outras informações. Para ter acesso a todas as
    |  constantes pré-definidas, pode-se utilizar a função phpinfo(), que exibe uma tabela contendo todas as
    |  constantes pré-definidas, assim como configurações da máquina, sistema operacional, servidor http e versão
    |  do PHP instalada. 
    |
    */

    // Declarando constantes
    define('BD_URL', 'endereco_bd_dev');
    define('BD_USUARIO', 'usuario_dev');
    define('BD_SENHA', 'senha_dev');
    
    echo BD_URL . '<BR />';
    echo BD_USUARIO . '<BR />';
    echo BD_SENHA . '<BR />';

    // Exemplo de constante variavel
    define('SOMAR', 10); 
    $soma = 10;

    echo $soma * SOMAR;

  ?>
  
</body>
</html>