<?php 
	class homeController extends Controller {
		public function index(){
			$nomePag = "home";
			$dados = array();
			$this->loadView($nomePag, $dados);
		}

		public function pesquisaAVs(){ 
			$array = array();
			$av = addslashes($_GET['pesquisaAV_txt']);
			if($av == ""){ 
				$avsModel = new avsModel();
				$sql = $avsModel->pesquisaAVs("todos", NULL);
			}else{ 
				$avsModel = new avsModel();
				$sql = $avsModel->pesquisaAVs("especifico", $av);
			}
			$array = $sql->fetchAll();
			echo json_encode($array);
		}
	}
?>