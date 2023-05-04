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
	<h1>Conversor de unidades de medida</h1>
	<form action="logica/processamentoConversor.php" method="GET">
		<label for="valor">Valor:</label>
		<input type="number" name="valor" id="valor" required>
		<br><br>
		<label for="origem">De:</label>
		<select name="origem" id="origem">
			<option value="cm">Centímetros (cm)</option>
			<option value="m">Metros (m)</option>
			<option value="km">Quilômetros (km)</option>
		</select>
		<br><br>
		<label for="destino">Para:</label>
		<select name="destino" id="destino">
			<option value="cm">Centímetros (cm)</option>
			<option value="m">Metros (m)</option>
			<option value="km">Quilômetros (km)</option>
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
        <p>Desenvolvido por FATEC - Análise e Desenvolvimento de Sistema</p>
        <p>"Feliz é aquele que programa"</p>
        <p>Copyright © 2023 - Todos os direitos reservados</p>
    </footer>
</body>
</html>