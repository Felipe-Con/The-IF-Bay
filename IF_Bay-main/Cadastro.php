<!DOCTYPE html>
<head>
    <title>The Work Bay</title>
    <meta charset="UTF-8">
	<script src="Script.js"></script>
    <meta name="viewport" content="width=device-width, initial scale=1.0">
	<link rel="stylesheet" href="Styles/Cadastro.css">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
</head>
<body>

	<div id="login">
		<h1 id="textolog">BEM VINDO</h1>
		<br>
		<form action="./inserir.php" method="post">
		<input type="text" name="Nome" id="input" placeholder="Nome">
		<br>
		<input type="text" name="Sobrenome" id="input" placeholder="Sobrenome">
		<br>
		<input type="text" name="Login" id="input" placeholder="Nome de Usuário">
		<br>
		<input type="text" name="Email" id="input" placeholder="E-mail">
		<br>
		<input type="password" name="Password" id="input" class="input1" placeholder="Senha">
		<br>
		<input type="password" name="PasswordConfirm" id="input" class="input2" placeholder="Confirmar Senha">
		<br>
		<button id="loginbutton" onclick="redirectTo('UserProfile')">ENTRAR</button>
		</form>
	</div>
</body>