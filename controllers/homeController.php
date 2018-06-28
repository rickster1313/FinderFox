<?php 
	class homeController extends Controller {
		public function index(){
			$nomePag = "home";
			$dados = array();
			$this->loadView($nomePag, $dados);
		}

		public function pesquisaAVs(){ 
			$array = array("status" => "");
			$av = addslashes($_GET['pesquisaAV_txt']);
			if($av == ""){ 
				$array['status'] = "pesquisa todos";
			}else{ 
				$array['status'] = "pesquisa av: ".$av;
			}
			echo json_encode($array);
		}
	}
?>