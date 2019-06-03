<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funcao</title>
</head>
<body>

    <?php
        # Funcao do tipo void
        function exibirBoasVindas() {
            echo 'Bem vindos ao curso de php!';
        }

        exibirBoasVindas();

        echo '<br/>';

        # Funcao do tipo return
        function calcularAreaTerreno($largura, $comprimento) {
            $area = $largura * $comprimento;
            return 'A medida é ' . $area;
        }

        echo calcularAreaTerreno(20, 30);
    ?>
    
</body>
</html>