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
        # Foreach
        $itens = ['sofa', 'mesa', 'cadeira', 'fogao', 'geladeira'];

        echo '<pre>';
        print_r($itens);
        echo '</pre>';

        foreach($itens as $item) {
            echo "$item ";

            if($item == 'mesa') {
                echo '(* Compre uma mesa e ganhe 25% de desconto)';
            }

            echo '<br />';
        }
    ?>
</body>
</html>