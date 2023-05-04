<?php

    require 'funcoesCalculo.php';
    $resultado = "";
    session_start();//Iniciar a session

    $temperatura = $_POST["temperatura"];
    $conversao = $_POST["conversao"];

    if ($conversao == "CelsiusToFahrenheit") {
        $resultado = CelsiusToFahrenheit($temperatura);
        echo "<p>$temperatura °C equivalem a $resultado °F.</p>";
    } else {
        $resultado = FahrenheitToCelsius($temperatura);
        echo "<p>$temperatura °F equivalem a $resultado °C.</p>";
    }

    //Guardando o resultado na session "Resultado"
    $_SESSION['resultado'] = $resultado;
    //Comando HEADER (PHP) redireciona para uma pagina especificada
    header("location:../temperatura.php");
    die();

?>