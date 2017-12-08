<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<meta charset="utf-8"/>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
		<title>CANVAS</title>
		<link href="css/seu-stylesheet.css" rel="stylesheet"/>
		<script src="scripts/seu-script.js"></script>

	</head>
		<body style = "background-color: #F6F6F6">
 			<table border="0" width="80%" align="center">
			<tr>
					<td align="right">
					<a href="canvas.php">Canvas</a> |
                    <a href="formatacao-texto.php">Formatações de Texto</a> |
                    <a href="arquivos.php">Home</a> |
                    <a href="logout.php">Sair</a>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<h2>O que são?</h2>
			<p>Declarações condicionais são usadas para executar diferentes ações com base em condições diferentes.</p>
			<p>Muitas vezes, quando você escreve código, você quer realizar diferentes ações para diferentes condições. Você pode usar declarações condicionais em seu código para fazer isso.<br><br>
				<strong>Em PHP, temos as seguintes declarações condicionais:</strong><br><br>

				<strong>DECLARACAO IF</strong> - Executa algum código se uma condição for verdadeira.<br>
				<strong>DECLARACAO ... ELSE</strong> - Executa algum código se uma condição for verdadeira e outro código se essa condição for falsa.<br>
				<strong>DECLARACAO ... ELSEIF</strong> - Executa códigos diferentes por mais de duas condições.<br>
				<strong>DECLARACAO SWITCH</strong> - Seleciona um dos muitos blocos de código a serem executados.</p><hr size="5">

			<h1 align="center">SINTAXE</h1>

<p>
	<table border="2">
		<tr>
			<th>
				if (condition) {
	<br>code to be executed if condition is true;<br>
	}
			</th>
		</tr>
	</table><br>
</p>

<p>
	<strong>O exemplo abaixo exibirá "Tenha um bom dia!" se a hora atual (HORA) for inferior a 20:</strong><br>

<table border="2">
	<tr>
		<th>$t = date("H");<br>
		if ($t < "20"){
    	echo "Have a good day!";<br>
}</th>
	</tr>
</table></p>

<hr size="5">

 <p><strong>A instrução IF/ELSE executa algum código se uma condição for verdadeira e outro código se essa condição for falsa.</strong></p>

<p>
	<table border="2">
		<tr>
			<th>
				if (condition)<br> {
	code to be executed if condition is true;<br>
	} else <br>{
	code to be executed if condition is false;<br>
	}
			</th>
		</tr>
	</table>
</p><hr size="5">

<p><strong>A declaração IF/ELSE/ELSEIF executa códigos diferentes para mais de duas condições.</strong></p>

<p>
	<table border="2">
		<tr>
			<th>if (condition) <br>{
	code to be executed if this condition is true;<br>
	} elseif (condition) <br>{
	code to be executed if this condition is true;<br>
	} else <br>{
	code to be executed if all conditions are false;<br>
	}</th>
		</tr>
	</table>
</p><hr size="5">
</body>
</html>
