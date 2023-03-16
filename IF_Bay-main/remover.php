require_once 'conexao.php';

$id = $_POST ['id'];

$query = $conexao->prepare ("SELECT id, nome, sobrenome
							email, senha, nomeUsuario
							FROM usuario
							WHERE id = :id");
							
							
$query->bindValue (':id', $id);
$query->execute();

$linha = $query->fetch();

if($linha) {
	echo "Nome: {$linha['nome']} | Sobrenome: {$linha['sobrenome']} |
	Email: {$linha['email']} | Nome de Usuario: {$linha['nomeUsuario']}
	<br />";
}
	echo '<p>Dseja remover este usuário? >/p>';
	
	echo '<form action="remover.php" method="post" >
		<input type="hidden" name="id" value ="'.$linha['id'].'"/>
		<input type="submit" value="Remover jogador"/>
		</form>';
		
$id - $_POST ['id'];

$sql = "DELETE FROM usuario WHERE id = :id";

$query = $conexao->prepare($sql);
$query->bindValue(':id',$id);
	