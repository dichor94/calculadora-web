<?php

if(isset($_POST['submit'])){ //Si se ha apretado el botón de enviar

    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];

    $operacion = $_POST['submit'];

    $total = ""; //Declaro antes la operación, lo hago a string ya que para este ejecicio es suficiente.


    switch($operacion){

        case "suma":
            $total = $num1 + $num2;
            break;
        case "resta":
            $total = $num1 - $num2;
            break;

    }

    echo "El resultado es: ".$total;

}










?>