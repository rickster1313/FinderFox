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
				$currentController = $url[0]."Controller";
				array_shift($url);
				if(isset($url[0]) && !empty($url[0])){
					$currentAction = $url[0];
					array_shift($url);
				}else{
					$currentAction = "index";
				}
				$param = $url;
			}else{
				//se nao tiver (ir para index da home)
				$currentController = "homeController";
				$currentAction = "index";
			}
			//currentController (qual controler ele vai chamar)
			//currentAction (qual funcao/acao dentro do controller ele vai chamar)
			$c = new $currentController();
			call_user_func_array(array($c, $currentAction), $param);
			//chama a funcao do array com/sem uso de parametros
		}

	}
	

?>

