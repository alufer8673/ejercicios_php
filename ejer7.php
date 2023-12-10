<?php
    $total_compra = 34.5;

    if ($total_compra < 30){
        echo "Compra más o te cobraremos 8,95€ de gastos de envío";
    }elseif ($total_compra < 90){
        $diferencia = 90 - $total_compra;
        echo "Con sólo $diferencia € más podrás tener gastos de envio gratuitos";
    }else{
        echo "Gastos de envío incluidos";
    }
?>