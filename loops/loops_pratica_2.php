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
        
        $funcionarios = [
            ['nome' => 'Joao', 'salario' => 2500, 'data_nascimento' => '06-03-1997' ],
            ['nome' => 'Maria', 'salario' => 3330 ],
            ['nome' => 'Julia', 'salario' => 2200 ]
        ];

        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';

        foreach($funcionarios as $idx => $funcionario) {

            foreach($funcionario as $idx2 => $valor) {
                echo "$idx2 - $valor <br />";
            }

            echo '<hr />';
        }
    ?>
</body>
</html>