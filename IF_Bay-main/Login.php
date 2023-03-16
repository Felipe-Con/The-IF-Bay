<head>
    <title>The Work Bay</title>
    <meta charset="UTF-8">
	<script src="Script.js"></script>
    <meta name="viewport" content="width=device-width, initial scale=1.0">
	<link rel="stylesheet" href="Styles/Login.css">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@1,200&family=Quicksand:wght@300&display=swap" rel="stylesheet">
	<script>
	</script>
</head>
<body>

	<div id="login">
		<h1 id="textolog">BEM VINDO</h1>
		<br>
		<form action="./UserProfile.php" method="post">
		<div class="container" id="containerdiv">
			<input type="text" id="user" class="login" name="user" placeholder="Nome de usuário / E-mail">
		
			<input type="password" name="password" id="password" class="password" placeholder="Senha">
			<button id="loginbutton" type="submit">ENTRAR</button>
		</div>
		</form>
		
		<div id="checkbox">
		<input type="checkbox">
		<span id="fontefina">lembrar senha</span>
		</div>
		
		<a id="fontefina" href="Redefinir Senha.html">Esqueci minha senha<a>
	</div>
</body>