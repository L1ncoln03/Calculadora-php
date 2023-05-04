<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <title>CalcTEC</title>
</head>
<body>
    <header>
        <h1>CalcTEC</h1>
    </header>
    <nav class="menu">
        <ul>
            <li><a href="https://www.fatecpp.edu.br/">Sobre</a></li>
            <li><a href="index.php">Calculadora</a></li>
            <li><a href="temperatura.php">Temperatura</a></li>
            <li><a href="conversor.php">Conversão</a></li>
        </ul>
    </nav>
    
    <div class="div-conteudo">
	<h1>Conversão de Temperatura</h1>
	<form action="logica/processamentoTemp.php" method="post">
		<label for="temperatura">Temperatura:</label>
		<input type="number" id="temperatura" name="temperatura" required>
		<br><br>
		<label for="conversao">Converter para:</label>
		<select id="conversao" name="conversao" required>
			<option value="CelsiusToFahrenheit">Celsius para Fahrenheit</option>
			<option value="FahrenheitToCelsius">Fahrenheit para Celsius</option>
		</select>
		<br><br>
		<input type="submit" value="Converter">
	</form>

        <h1 id="resultado"> 
            <?php
                //Verifica se existe session "RESULTADO"
                if(isset($_SESSION['resultado'])){
                    //caso exista, ultiliza um echo para exibir resultado
                    echo"Resultado = ". $_SESSION['resultado'];
                }
            ?>
        </h1>
        <img src="img/google-play.png">
    </div>

    <footer>
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistemas</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2023 - Todos os direitos reservados</p>
    </footer>
</body>
</html>