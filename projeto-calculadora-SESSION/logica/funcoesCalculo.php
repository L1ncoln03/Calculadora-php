<?php
    //Calculadora
    function adicao($num1, $num2){
        $result = $num1 + $num2;
        return($result);
    }

    function subtracao($num1, $num2){
        $result = $num1 - $num2;
        return($result);
    }

    function multiplicacao($num1, $num2){
        $result = $num1 * $num2;
        return($result);
    }

    function divisao($num1, $num2){
        $result = $num1 / $num2;
        return($result);
    }

    //Temperatura
    function CelsiusToFahrenheit($tempCelsius) {
        $tempFahrenheit = ($tempCelsius * 1.8) + 32;
        return $tempFahrenheit;
    }
    
    function FahrenheitToCelsius($tempFahrenheit) {
        $tempCelsius = ($tempFahrenheit - 32) / 1.8;
        return $tempCelsius;
    }

    //Medida
    function cm_to_m($valor_cm) {
        return $valor_cm / 100;
    }
    
    function m_to_cm($valor_m) {
        return $valor_m * 100;
    }
    
    function m_to_km($valor_m) {
        return $valor_m / 1000;
    }
    
    function km_to_m($valor_km) {
        return $valor_km * 1000;
    }
?>
