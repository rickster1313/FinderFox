<?php 
	class buscaAVController extends Controller{
		
		public function index(){
			$nomePag = "buscaAV";
			$dados = array();
			$this->loadView($nomePag, $dados);
		}
	}

?>