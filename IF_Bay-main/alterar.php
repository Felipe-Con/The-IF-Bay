<form action "editar.php" method="post">
	<label for="nome">Nome</label>
	<input id="nome" type="text" name="nome" value ="<?php echo $_POST['nome']?>"/>
	
	<label for="sobrenome">Sobrenome</label>
	<input id="sobrenome" type="text" name="sobrenome" value="<?php echo $_POST['sobrenome']?>"/>
	
	<label for="nomeUsuario">Login</label>
	<input id="nomeUsuario" type="text" name="Login" value ="<?php echo $_POST['Login']?>"/>
	
	<label for="email">Email</label>
	<input id="email" type="text" name="Email" value ="<?php echo $_POST['Email']?>"/>
	
	<input type="hidden" name="id" value="<?php echo $_POST['id']?>"/>
	
	<input type="submit" value="Enviar"/>
	
</form>