
<?php 
	class htmlController extends Controller {
		public function abrir($pagina){
			$nomePag = "html/".$pagina[0];
			$dados = array(
                            "remetente"=>$pagina[1]
                        );
			$this->loadView($nomePag, $dados);
		}

		
	}
?>