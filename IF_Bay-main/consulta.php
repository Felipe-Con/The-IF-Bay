<?php 
	if(isset($_POST['nome'])) {
		require_once 'conexao.php';
		
		$nome = $_POST['nome'];
		
		$query = $conexao->prepare("SELECT * FROM usuario WHERE nome = :nome");
		$query->bindValue(':nome', $nome);
		$query->execute();
		
		$linha = $query->fetch()/
		
		if($linha) {
			echo "id: {$linha['id']} - Nome: {$linha['nome']}
				- sobrenome: {$linha['sobrenome']} 
				- email: {$linha['email']}
				- senha: {$linha['senha']}
				- nomeUsuario: {$linha['nomeUsuario']}
			<br />";
		
		}
		else {
				echo 'Nenhum usário encontrado.';
		}
	}