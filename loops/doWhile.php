<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Do While</title>
</head>
<body>
    <?php
        $x = 1;

        do {    
            echo 'Entrou no do while';
            $x++; // Criterio de parada
        } while($x < 9);
    ?>
</body>
</html>