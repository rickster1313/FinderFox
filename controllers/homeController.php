<?php 
	class homeController extends Controller {
		public function index(){
			$nomePag = "home";
			$dados = array();
			$this->loadView($nomePag, $dados);
		}

		
	}
?>