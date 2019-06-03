<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funcao Nativas</title>
</head>
<body>
    <?php
        # Funcao Nativas Para Manipular Datas

        /*
            # date -> Recuperar a data atual
            # date_default_timezone_get -> Recuperar o timezone default da aplicaçao
            # date_default_timezone_set -> Atualizar o timezone da aplicaçao
            # strtotime -> Tranforma datas textuais em segundos
        */

        $data_inicial = '2018-04-24';
        $data_final = '2018-05-15';

        /*
        echo date('d/m/Y H:i');
        
        echo '<br/>';
        echo date_default_timezone_get();

        // echo '<br/>';
        // echo date_default_timezone_set('America/Sao_Paulo');
        echo '<br/>';
        echo date('d/m/Y H:i');
        */

        // Timestamp
        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        echo $data_inicial . ' - ' . $time_inicial;
        echo '<br/>';
        echo $data_final . ' - ' . $time_final;

        echo '<br/>';

        $diferenca_times = abs($time_final - $time_inicial);

        echo 'A direfenca é ' .$diferenca_times;

    ?>
</body>
</html>