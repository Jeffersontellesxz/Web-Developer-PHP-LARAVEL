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
        // false (true/false) - tipo variavel boolean
        // null e empty - valores especiais

        $funcionario1 = null;
        $funcionario2 = '';
        $funcionario3 = false;

        // valores null
        if(is_null($funcionario1)) {
            echo 'Sim a variavel e null';
        } else {
            echo 'Não, a variavel nao e null';
        }

        echo '<br />';

        if(is_null($funcionario2)) {
            echo 'Sim, a variavel e null';
        } else {
            echo 'Não, a variavel nao e null';
        }

        echo '<br />';

        if(is_null($funcionario3)) {
            echo 'Sim, a variavel e null';
        } else {
            echo 'Não, a variavel nao e null';
        }

        echo '<hr />';

        if(empty($funcionario1)) {
            echo 'Sim, a variavel esta vazia';
        } else {
            echo 'Não, a variavel nao esta vazia';
        }

        echo '<br />';

        if(empty($funcionario2)) {
            echo 'Sim, a variavel esta vazia';
        } else {
            echo 'Não, a variavel nao esta vazia';
        }

        echo '<br />';

        if(empty($funcionario3)) {
            echo 'Sim, a variavel e null';
        } else {
            echo 'Não, a variavel nao e null';
        }
    ?>
</body>
</html>