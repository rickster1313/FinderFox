<?php 

	class usuariosModel extends Model{


		public function procuraEmail($email){
			$sql = "SELECT id, nvl_acesso, senha FROM tbl_usuarios WHERE email = ?";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(1, $email);
			$sql->execute();
			return $sql;

		}
		public function getDados($id){
			$sql = "SELECT * FROM tbl_usuarios WHERE id = ?";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(1, $id);
			$sql->execute();
			return $sql;
		}

		public function getAllUsers(){
			$sql = "SELECT * FROM tbl_usuarios";
			$sql = $this->pdo->query($sql);
			return $sql;
		}

		public function verificaEmail($email){
			$sql = "SELECT * FROM tbl_usuarios WHERE email = ?";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(1, $email);
			$sql->execute();
			return $sql;
		}
		public function verificaCPF_CNPJ($cpf_cnpj){
			$sql = "SELECT * FROM tbl_usuarios WHERE CPF_CNPJ = ?";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(1, $cpf_cnpj);
			$sql->execute();
			return $sql;
		}

		public function cadastraUsuario($nome, $data, $email, $senha, $endereco, $telefone, $sexo, $cpf_cnpj){
			$sql = "INSERT INTO tbl_usuarios(nome, data_nasc, nvl_acesso, email, senha, CPF_CNPJ, endereco, telefone, sexo, status, created) VALUES (?, ?, 'empresario', ?, ?, ?, ?, ?, ?, 0, NOW() ) ";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(1, $nome);
			$sql->bindValue(2, $data);
			$sql->bindValue(3, $email);
			$sql->bindValue(4, $senha);
			$sql->bindValue(5, $cpf_cnpj);
			$sql->bindValue(6, $endereco);
			$sql->bindValue(7, $telefone);
			$sql->bindValue(8, $sexo);
			$sql->execute();
		}
	}


?>
