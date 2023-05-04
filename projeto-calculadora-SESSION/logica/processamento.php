<?php

require 'funcoesCalculo.php';
$resultado = "";
session_start();//Iniciar a session

if(!empty($_POST['inputNum1']) && !empty($_POST['inputNum2'])){

    $numero1 = $_POST['inputNum1'];
    $numero2 = $_POST['inputNum2'];

    if($_POST['selectOperacoes'] == "adicao"){
        $resultado = $numero1 . " + " . $numero2 . " = " . adicao($numero1,$numero2);
    }
    else if($_POST['selectOperacoes'] == "subtracao"){
        $resultado = $numero1 . " - " . $numero2 . " = " . subtracao($numero1,$numero2);
    }
    else if($_POST['selectOperacoes'] == "multiplicacao"){
        $resultado = $numero1 . " x " . $numero2 . " = " . multiplicacao($numero1,$numero2);
    }
    else if($_POST['selectOperacoes'] == "divisao"){
        $resultado = $numero1 . " / " . $numero2 . " = " . divisao($numero1,$numero2);
    }


    //Guardando o resultado na session "Resultado"
    $_SESSION['resultado'] = $resultado;
    //Comando HEADER (PHP) redireciona para uma pagina especificada
    header("location:../index.php");
    die();
}

?>
