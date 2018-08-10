<?php 
	class buscaAVController extends Controller{
		
		public function index(){
			$verificar = $this->cepExists();
			if($verificar['status'] == 'falso'){
  				header("Location:".BASE_URL);
			}
			$nomePag = "buscaAV";
			$dados = array('cep_ativo' => $_SESSION['cep_ativo']);
			$this->loadView($nomePag, $dados);
		}
		public function get($cep){
			if(isset($cep[0]) && !empty($cep[0])){
				$_SESSION['cep_ativo'] = $cep[0];
				$this->index();
			}else{
	
				$_SESSION['msg'] = "<div class='alert alert-warning alert-dismissible w-75' style='left: 50%; transform: translate(-50%);'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    			<strong>Não conseguimos te localizar!</strong> Informe sua localização para acessar encontra serviços disponíveis!
  				</div>";
  				header("Location:".BASE_URL);

			}
			
		}

		public function cepExists(){
			$retorno = array('status' => 'falso', 'lat' => '', 'lon'=>'');
			if(!isset($_SESSION['cep_ativo'])){

				$_SESSION['msg'] = "<div class='alert alert-warning alert-dismissible w-75' style='left: 50%; transform: translate(-50%);'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    			<strong>Não conseguimos te localizar!</strong> Informe sua localização para acessar encontra serviços disponíveis!
  				</div>";
				$retorno['status'] = 'falso';
			}else{
				do{
					$json = json_decode(file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$_SESSION['cep_ativo'])); 	
				}while($json->status == "OVER_QUERY_LIMIT");
				if($json->status == "INVALID_REQUEST"){
					$_SESSION['msg'] = "<div class='alert alert-warning alert-dismissible w-75' style='left: 50%; transform: translate(-50%);'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    				<strong>Erro no CEP</strong>, tente novamente!
  					</div>";
  					$retorno['status'] = 'falso';
				}else if($json->status == "ZERO_RESULTS"){
					$_SESSION['msg'] = "<div class='alert alert-warning alert-dismissible w-75' style='left: 50%; transform: translate(-50%);'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
    				<strong>Ops!</strong> CEP não encontrado, tente novamente!
  					</div>";
  					$retorno['status'] = 'falso';
				}else{
					$retorno['status'] = 'verdadeiro';
                    $retorno['lat'] = $json->results[0]->geometry->location->lat;
                    $retorno['lon'] = $json->results[0]->geometry->location->lng;
				}
			}
			return $retorno;
		}
		public function deleteCep(){
			unset($_SESSION['cep_ativo']);
		}
	}

?>