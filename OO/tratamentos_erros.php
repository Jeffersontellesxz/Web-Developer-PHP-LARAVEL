<?php 

    // Logica
    try {       
        echo '<h3>*** Try ***</h3>';

        //$sql = 'Select * from clientes';
        //mysql_query($sql);

        if(!file_exists('require_arquivo-a.php')) {
            throw new Exception('O arquivo em questao deveria estar desponivel as x ' . date('d/m/y h:i:s') . ' horas mas vamos constinuar');
        };

    } catch (Error $e) {
        echo '<h3>*** Catch Error ***</h3>';
        echo '<p style="color: red">' . $e . '</p>';

    } catch (Exception $e) {
        echo '<h3>*** Catch Exception ***</h3>';
        echo '<p style="color: red">' . $e . '</p>';
    }