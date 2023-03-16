<?php

require_once 'conexao.php';

if(isset($_POST['Nome']) && isset ($_POST['Password']) && isset ($_POST['Email']) && isset ($_POST['Login']) && isset ($_POST['Sobrenome'])){
	if(empty($_POST['Nome']) || empty($_POST['Password']) || empty($_POST['Email']) || empty($_POST['Login']) || empty($_POST['Sobrenome'])){
		header("Location: pagina_inserir.php?erro=2");
	}
	else{
		$Nome = $_POST ['Nome'];
		$Password = $_POST ['Password'];
		$Email = $_POST ['Email'];
		$Login = $_POST ['Login'];
		$Sobrenome = $_POST ['Sobrenome'];
		
		$sql = "INSERT INTO usuario (nome, sobrenome, email, nomeUsuario, senha)
							VALUES  (:nome, :sobrenome, :email, :nomeUsuario, :senha)";
					
		$query = $conexao->prepare ($sql);
		$query -> bindValue (':nome', $Nome);
		$query -> bindValue (':sobrenome', $Sobrenome);
		$query -> bindValue (':email', $Email);
		$query -> bindValue (':nomeUsuario', $Login);
		$query -> bindValue (':senha', md5 ($Password));

		try {
		$query-> execute();
		header("Location: UserPage.php");
		}catch (Exception $ex) { echo $ex;
		//header ("Location: pagina_inserir.php?error=1");
		}
	}
}

else {
	header ("Location: inserir.php?error=3");
	
}


