<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(isset($_POST['operacion'])){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
        $operacion = $_POST['operacion'];

        $result = '';

        switch ($operacion) {
            case 'multiplicacion':
                $result = $number1* $number2;
                break;
            case 'division':
                if ($number2 != 0) {
                    $result = $number1/$number2;
                } else {
                    $result = "Error. No se puede dividir entre 0";
                }
                break;
            default:
                $result = "Operación no válida";
                break;
        }
    }
    echo "El resultado de la $operacion es: $result";
}

?>