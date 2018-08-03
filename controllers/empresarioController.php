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


			$nomeAv = addslashes($_POST['nome_empresa_txt']);
			$avsModel = new avsModel();
			$dados = $avsModel->procuraNomeAv($nomeAv);
			if ($dados->rowCount() > 0 ) {
				$array['status'] = 'yes';

			}else{
				$array['status'] = 'no';

			}
			echo json_encode($array);

		}

		public function verificaUrlAV(){
			$array = array(
				'status_url' => ''
			);


			$url = addslashes($_POST['url_txt']);
			$avsModel = new avsModel();
			$dados = $avsModel->procuraUrlAv($url);
			if ($dados->rowCount() > 0 ) {
				$array['status_url'] = 'yes';

			}else{
				$array['status_url'] = 'no';

			}
			echo json_encode($array);
		}

		public function novoAV(){
			$nome_av = addslashes($_POST['nome_empresa_txt']);
			$url = addslashes($_POST['url_txt']);
			$slogan = addslashes($_POST['slogan_txt']);
			$logo = $_FILES['logo_txt'];
			$extensao_logo = explode("/", $logo['type']);
			$nome_logo = "logo-".str_replace(" ", "-", $nome_av).".".$extensao_logo[1];
			move_uploaded_file($logo['tmp_name'], "assets/images/AV/".$nome_logo);
			$avsModel = new avsModel();
			$avsModel->novoAV($_SESSION['id'], $url, $nome_av, $slogan, $nome_logo);
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
				$_SESSION["msg"] = "
				<div class='alert alert-warning'>
  				<strong>Opa! </strong> Para ter acesso à essa página você precisa fazer login</div>";
				header("Location:".BASE_URL."login");
			}
		}
		public function enderecos(){
			
		}
	}
?>