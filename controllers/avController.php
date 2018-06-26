<?php 
	class avController extends Controller{
		
		public function index($id_av){
			$nomePag = "ambiente_virtual";
			$avsModel = new avsModel();
			$av_pesquisa = $avsModel->getDadosAV($id_av);
			$av_dados = $av_pesquisa->fetch();
			$dados = array(
				"logo_av" => $av_dados['logo_av'],
				"nome_av" => $av_dados['nome_av'],
				"slogan_av" => $av_dados['slogan_av']
				);
			$this->loadView($nomePag, $dados);
		}
	}

?>