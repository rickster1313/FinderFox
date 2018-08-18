<?php 
	class avController extends Controller{
		
		public function index($id_av){
			$nomePag = "ambiente_virtual";
			$avsModel = new avsModel();
			$av_pesquisa = $avsModel->getDadosAV($id_av);
			$av_dados = $av_pesquisa->fetch();
			$dados = array();
			foreach ($av_dados as $key => $value) {
				if(!is_numeric($key)){
					$dados[$key] = $value;
				}	
			}
			$this->loadView($nomePag, $dados);
		}
	}

?>