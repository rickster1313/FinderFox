<?php 
	/**
	* 
	*/
	class cadastroController extends Controller{
		
		public function index(){
			$nomePag = "cadastro";
			$dados = array();
			$this->loadView($nomePag, $dados);
		}
		public function valida(){
			if(isset($_POST["enviar_cad"])){

			}else{
				$_SESSION["msg"] = "Erro no formulário de cadastro";
				header("Location:".BASE_URL."cadastro");
			}
		}
		public function verificaEmail(){
			$email = $_GET['email_txt'];
			$usuariosModel = new usuariosModel();
			$sql = $usuariosModel->verificaEmail($email);
			$array=array(
				'status'=>'',
				'texto'=>''
					);

			if($sql -> rowCount() > 0){
				$array['status'] = false;
				$array['texto'] = "Este e-mail já está em uso";
			}else{
				$array['status'] = true;
				$array['texto'] = "E-mail OK";
			}
			echo json_encode($array);
		}
		public function verificaCPF_CNPJ(){
			$usuariosModel = new usuariosModel();
			$array = array("status" => "", "texto" => "");
			$cpf_cnpj = $_GET["CPF_CNPJ_txt"];
			$sql = $usuariosModel->verificaCPF_CNPJ($cpf_cnpj);
			if($sql -> rowCount() > 0){
				$array['status'] = false;
				if(strlen($cpf_cnpj) == 14){
					$array['texto'] = "Este CPF já está em uso";
				}else{
					$array['texto'] = "Este CNPJ já está em uso";
				}
			}else{
				$array['status'] = true;
				if(strlen($cpf_cnpj) == 14){
					$array['texto'] = "CPF OK";
				}else{
					$array['texto'] = "CNPJ OK";
				}
				
			}
			echo json_encode($array);
		}
		public function cadastrar(){

			$nome = addslashes($_POST["nome_txt"]);
			$data = addslashes($_POST["data_txt"]);
			$email = addslashes($_POST["email_txt"]);
			$senha =  password_hash(addslashes($_POST["senha_txt"]), PASSWORD_DEFAULT);
			$endereco = addslashes($_POST["endereco_txt"]);
			$telefone = addslashes($_POST["telefone_txt"]);
			$sexo = addslashes($_POST["sexo_txt"]);
			$cpf_cnpj = addslashes($_POST["CPF_CNPJ_txt"]);

			$usuariosModel = new usuariosModel();
			$usuariosModel->cadastraUsuario($nome, $data, $email, $senha, $endereco, $telefone, $sexo, $cpf_cnpj);
		}
	}



?>