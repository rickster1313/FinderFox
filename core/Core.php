<?php 
	class Core{
		public function run(){
			//run é o inicializador da estrutura MVC
			$param = array();
			$url = "/";
			if(isset($_GET['url'])){
				$url .= $_GET['url'];
			}
			if($url != "/"){
				//se tiver direcionamento (se para o caminho)

				$url = explode("/", $url);
				array_shift($url);
				//array_shift tira o primeiro registro do array 

				//procura para testar se é um AV
				$avsModel = new avsModel();
				$pesquisa = $avsModel -> procuraUrlAv($url[0]);
				if($pesquisa->rowCount() > 0){
					$dados = $pesquisa->fetch();
					$currentController = "avController";
				}else{
					$currentController = $url[0]."Controller";
				}
				array_shift($url);

				if(isset($url[0]) && !empty($url[0])){
					$currentAction = $url[0];
					array_shift($url);
				}else{
					$currentAction = "index";
				}
				if($pesquisa->rowCount() > 0){
					$param = $dados['id_av'];
				}else{
					$param = $url;
				}
				
			}else{
				//se nao tiver (ir para index da home)
				$currentController = "homeController";
				$currentAction = "index";
			}
			//currentController (qual controler ele vai chamar)
			//currentAction (qual funcao/acao dentro do controller ele vai chamar)
			$c = new $currentController();
			call_user_func_array(array($c, $currentAction), array($param));
			//chama a funcao do array com/sem uso de parametros
		}

	}
	

?>

