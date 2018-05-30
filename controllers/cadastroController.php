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
			if(isset($_GET["CPF_txt"])){
				$cpf = $_GET["CPF_txt"];
				$sql = $usuariosModel->verificaCPF($cpf);
				if($sql -> rowCount() > 0){
					$array['status'] = false;
					$array['texto'] = "Este CPF já está em uso";
				}else{
					$array['status'] = true;
					$array['texto'] = "CPF OK";
				}
			}else{
				$cnpj = $_GET["CNPJ_txt"];
				$sql = $usuariosModel->verificaCNPJ($cnpj);
				if($sql -> rowCount() > 0){
					$array['status'] = false;
					$array['texto'] = "Este CNPJ já está em uso";
				}else{
					$array['status'] = true;
					$array['texto'] = "CNPJ OK";
				}
			}
			echo json_encode($array);
		}
	}



?>