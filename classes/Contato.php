<?php 

class Contato {


	public function addContato($nome, $email, $telefone, $mensagem) {

		global $conn;

		$sql = "INSERT INTO contatos (nome, email, telefone, mensagem) VALUES (:nome, :email, :telefone, :mensagem)";

		$sql = $conn->prepare($sql);
		$sql->bindValue(':nome', $nome);
		$sql->bindValue(':email', $email);
		$sql->bindValue(':telefone', $telefone);
		$sql->bindValue(':mensagem', $mensagem);

		return $sql->execute();
	}

}
