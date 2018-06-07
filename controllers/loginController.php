<?php
	
	class loginController extends Controller {
		public function index(){
			$this->testaLogin();
			$nomePag = "login";
			$dados = array();
			$this->loadView($nomePag, $dados);
		}

		public function valida(){
			//valida todos os dados do login
			if(isset($_POST["enviar_login"])){
				$email = addslashes($_POST["email_txt"]); 
				$senha = addslashes($_POST["senha_txt"]);
				$usuariosModel = new UsuariosModel();
				$sql = $usuariosModel->procuraEmail($email); 
				if($sql->rowCount() > 0){
					$row = $sql->fetch();
					if(password_verify($senha, $row["senha"])){
						//tudo certo, fazer login
						$this->fazerLogin($row);
					}else{
						//se a senha não conrresponder como email
						$_SESSION["msg"] = "E-mail ou senha inválido";
						header("Location:".BASE_URL."login");
					}
				}else{
					//se não encontar email correspondente
					$_SESSION["msg"] = "E-mail ou senha inválido";
					header("Location:".BASE_URL."login");
				}
			}else{
				//se acessar url sem dados
				header("Location:".BASE_URL."login");
			}
		}

		private function testaLogin(){
			//testa para ver se ja tem usuario logado
			if(isset($_SESSION["id"])){
				if($_SESSION["nvl_acesso"] == "adm"){
					header("Location:".BASE_URL."adm");
				}else if($_SESSION["nvl_acesso"] == "empresario"){
					header("Location:".BASE_URL."empresario");
				}else{
					echo "envia para area de clientes";
				}
			}
		}

		private function fazerLogin($dados){
			//faz login depois dos dados estarem corretos
			$_SESSION["id"] = $dados["id"];
			$_SESSION["nvl_acesso"] = $dados["nvl_acesso"];

			if($dados["nvl_acesso"] == "adm"){
				header("Location:".BASE_URL."adm");
			}elseif ($dados["nvl_acesso"] == "empresario") {
				header("Location:".BASE_URL."empresario");
			}else{
				echo "Mandar para painel de Clientes";
			}
		}

		public function deslogar(){
			unset($_SESSION["id"] ,$_SESSION["nvl_acesso"]);
			$_SESSION["msg"] = "Deslogado com sucesso";
			header("Location:".BASE_URL."login");
		}
	}

?>