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
		public function verificaCPF($cpf){
			$sql = "SELECT * FROM tbl_usuarios WHERE CPF = ?";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(1, $cpf);
			$sql->execute();
			return $sql;
		}
		public function verificaCNPJ($cnpj){
			$sql = "SELECT * FROM tbl_usuarios WHERE CNPJ = ?";
			$sql = $this->pdo->prepare($sql);
			$sql->bindValue(1, $cnpj);
			$sql->execute();
			return $sql;
		}

	}


?>
