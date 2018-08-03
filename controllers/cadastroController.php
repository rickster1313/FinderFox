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
			$email = addslashes($_POST['email_txt']);
			$usuariosModel = new usuariosModel();
			$sql = $usuariosModel->verificaEmail($email);
			$array=array("status"=>"");
			if($sql -> rowCount() > 0){
				$array['status'] = false;
			}else{
				$array['status'] = true;
			}
			echo json_encode($array);
		}
		public function verificaCPF_CNPJ(){
			$usuariosModel = new usuariosModel();
			$array = array("status" => "");
			$cpf_cnpj = addslashes($_POST["cpf_cnpj_txt"]);
			$sql = $usuariosModel->verificaCPF_CNPJ($cpf_cnpj);
			if($sql -> rowCount() > 0){
				$array['status'] = false;
			}else{
				$array['status'] = true;
			}
			echo json_encode($array);
		}
		public function cadastrar(){
			if ($_POST['user'] === "one") {
				$tipo = "usuario";
				$nome = addslashes($_POST["nome_txt"]);
				$email = addslashes($_POST["email_txt"]);
				$telefone = addslashes($_POST["telefone_txt"]);
				$cpf_cnpj = addslashes($_POST["cpf_cnpj_txt"]);
				$senha =  password_hash(addslashes($_POST["senha_txt"]), PASSWORD_DEFAULT);
				$usuariosModel = new usuariosModel();
				$usuariosModel->cadastraUsuario($nome, $email, $telefone, $cpf_cnpj, $senha, $tipo); 

			}else if($_POST['user'] === "two") {
				$tipo = "empresario";
				$nome = addslashes($_POST["nome_txt"]);
				$email = addslashes($_POST["email_txt"]);
				$telefone = addslashes($_POST["telefone_txt"]);
				$cpf_cnpj = addslashes($_POST["cpf_cnpj_txt"]);
				$senha =  password_hash(addslashes($_POST["senha_txt"]), PASSWORD_DEFAULT);
				$cep = addslashes($_POST["cep_txt"]);
				$rua = addslashes($_POST["rua_txt"]);
				$estado = addslashes($_POST["estado_txt"]);
				$cid = addslashes($_POST["cid_txt"]);
				$num = addslashes($_POST["num_txt"]);
				$usuariosModel = new usuariosModel();
				$id = $usuariosModel->cadastraUsuario($nome, $email, $telefone, $cpf_cnpj, $senha, $tipo); 
				
				$usuariosModel->cadastraEndereco($id, $cep, $rua, $estado, $cid, $num);
			} 
		$_SESSION['msg']="<div class='alert alert-success'>Cadastrado com sucesso!
  </div>";	
		}
	}



?>