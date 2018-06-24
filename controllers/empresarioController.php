<?php 
	class empresarioController extends Controller{
		public function index(){
			$this->seguranca();
			$nomePag = "empresario";
			$usuariosModel = new usuariosModel();
			$userDados = $usuariosModel->getDados($_SESSION['id']);
			$userDados = $userDados->fetch();
			$dados = array(
				'nome' => $userDados["nome"],
				'av_status' => $this->verificaAV()
			);
			$this->loadView($nomePag, $dados);

		}

		public function verificaAV(){
			$avsModel = new avsModel();
			$avs_dados = $avsModel->procuraAV($_SESSION['id']);
			if($avs_dados-> rowCount() > 0){
				return 'html/av_personalize.php';
			}else{
				return 'html/av_create.php';
			}
		}
		
		public function verificaNomeAV(){
			$array = array(
				'status' => ''
			);


			$nomeAv = $_POST['nome_empresa_txt'];
			$avsModel = new avsModel();
			$Av = $avsModel->procuraNomeAv($nomeAv);
			if ($Av->rowCount() > 0 ) {
				$array['status'] = 'yes';

			}else{
				$array['status'] = 'no';

			}
			echo json_encode($array);

		}

		private function seguranca(){
			$seguro = true;
			//teste se login está OK
			if(!isset($_SESSION["id"]) || empty($_SESSION["id"])){
				$seguro = false;
			}
			//teste se o nvl_acesso corresponde a página empresario
			if(!isset($_SESSION["nvl_acesso"]) || empty($_SESSION["nvl_acesso"]) || $_SESSION["nvl_acesso"] != "empresario"){
				$seguro = false;
			}
			if(!$seguro){
				$_SESSION["msg"] = "Para ter acesso à essa página você precisa fazer login :)";
				header("Location:".BASE_URL."login");
			}
		}
	}
?>