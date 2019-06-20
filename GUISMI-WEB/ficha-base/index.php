<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<?php 
			include "php\config.php";
			include "php\login.php";
		?>
		<link rel="stylesheet" type="text/css" href="css/estilo-geral.css" >
		<link rel="stylesheet" type="text/css" href="css/index.css" >
		<script type="text/javascript" src="js/functions.js"></script>
		<title>Login GUISMI</title>
	</head>
	<body>
			<table class="login">
				<form method=POST>
					<tr><td> Guia de Sobrevivencia em um Mundo Improvisado </td></tr>
					<tr><td><input type=text name="login" placeholder="Login" required></td></tr>
					<tr><td><input type=password name="senha" placeholder="Senha" required></td></tr>
					<tr><td><input type=submit name="botao" value="Acessar"> &nbsp 
				</form>
				<button name="abre-cadastro" onClick="alterarDisplay('tela-cadastro','block');">Cadastrar</button></td></tr>
			</table>
			
			<div class="tela-cadastro">
				<table class="login">
						<tr><td> Cadastro </td><td><a onClick="alterarDisplay('tela-cadastro','none');">&times;</a></td></tr>
					<form method=POST id="FormCadastro">
						<tr><td><input type=text id="nome-cadastro" name="nome-cadastro" placeholder="Nome" required></td></tr>
						<tr><td><input type=text id="login-cadastro" name="login-cadastro" placeholder="Login" required></td></tr>
						<tr><td><input type=password id="senha-cadastro" name="senha-cadastro" placeholder="Senha" required></td></tr>
						<tr><td><input type=password id="repsenha-cadastro" name="repsenha-cadastro" placeholder="Repetir Senha" required></td></tr>
						<tr><td><input type=submit name="botao-cadastro" value="Cadastrar" onClick="validaFormulario()"></td></tr>
					</form>
				</table>
			</div>


	</body>
</html>