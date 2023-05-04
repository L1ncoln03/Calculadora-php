<?php
    require 'funcoesCalculo.php';
    $resultado = "";
    session_start();//Iniciar a session

    $valor = $_GET["valor"];
    $origem = $_GET["origem"];
    $destino = $_GET["destino"];
    
    if ($origem == "cm" && $destino == "m") {
        $resultado = cm_to_m($valor);
        echo "<p>$valor cm = $resultado m</p>";
    } elseif ($origem == "m" && $destino == "cm") {
        $resultado = m_to_cm($valor);
        echo "<p>$valor m = $resultado cm</p>";
    } elseif ($origem == "m" && $destino == "km") {
        $resultado = m_to_km($valor);
        echo "<p>$valor m = $resultado km</p>";
    } elseif ($origem == "km" && $destino == "m") {
        $resultado = km_to_m($valor);
        echo "<p>$valor km = $resultado m</p>";
    } else {
        echo "<p>Selecione unidades diferentes para conversão.</p>";
    }

        //Guardando o resultado na session "Resultado"
        $_SESSION['resultado'] = $resultado;
        //Comando HEADER (PHP) redireciona para uma pagina especificada
        header("location:../conversor.php");
        die();

?>