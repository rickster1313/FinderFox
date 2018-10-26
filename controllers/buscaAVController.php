<?php 
	class buscaAVController extends Controller{
		
		public function index($cep){
            if(isset($cep[0])){
                $this->get($cep[0]);
            }
            if((!isset($_SESSION['cep_ativo'])) || (empty($_SESSION['cep_ativo']))){
                $_SESSION['msg'] = "<div class='alert alert-warning alert-dismissible w-75' style='left: 50%; transform: translate(-50%);'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Não conseguimos te localizar!</strong> Informe sua localização para acessar encontra serviços disponíveis!
                    </div>";
                    header("Location:".BASE_URL);

            }
            $_SESSION['cep_ativo'] = preg_replace("/[^0-9]/", "",$_SESSION['cep_ativo']);
			$verificar = $this->cepExists();
			if($verificar['status'] == 'falso'){
  				header("Location:".BASE_URL);
			}
            $dataAV = $this->loadAVs($verificar['lat'], $verificar['lon']);
			$nomePag = "buscaAV";
			$dados = array('cep_ativo' => $_SESSION['cep_ativo'], 'dataAV' => $dataAV);
			$this->loadView($nomePag, $dados);
		}
		private function get($cep){
            $cepNew = preg_replace("/[^0-9]/", "",$cep);
			if((isset($cepNew)) && (!empty($cepNew)) && (strlen($cepNew) == 8) ){
                $_SESSION['cep_ativo'] = $cepNew;
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
                $array = str_split($_SESSION['cep_ativo'], 5);
                $_SESSION['cep_ativo'] = implode("-", $array);
				do{
                    $conteudo = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$_SESSION['cep_ativo']."&key=AIzaSyBKs6xziUpkbpZUFEqUl4XMgNvLtFbL_gM");
					$json = json_decode($conteudo); 	
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
            if(isset($_SESSION['cep_ativo'])) {
                echo "existe";
            }else{
                echo "nao exite";
            }
        }

        private function loadAVs($lat1, $lon1){
            $enderecosModel = new enderecosModel();
            $avsModel = new avsModel();
            $funcao = new funcaoController();
            $sqlEnd = $enderecosModel->endAtivos();
            $sqlAvs = $avsModel->getAVs();
            $dadosEnd = $sqlEnd->FetchAll();
            $dadosAvs = $sqlAvs->FetchAll();
            foreach ($dadosEnd as $value) {
                $distancia = $funcao->distanciaPontos($lat1, $lon1, $value['lat'], $value['lon']);
                if($value['raio'] == 'global' || $value['raio'] >= $distancia){
                    $endNoRaio[] = array('id' => $value['id_end'] , 'distancia' =>$distancia, 'user_id'=>$value['user_id'], 'cidade'=>$value['cidade'], 'estado'=>$value['estado']);
                }
            }

            foreach ($dadosAvs as $key => $value) {
                $userAvs[] = array('usuario_id'=> $value['user_id'], 'nome_av'=>$value['nome_av'], 'categoria' =>$value['categoria'], 'url' => $value['url'], 'img' =>$value['logo_av']);
            }
            foreach($endNoRaio as $key => $resp){
                
                foreach ($userAvs as $val_id) {
                    if($val_id['usuario_id'] == $resp['user_id']){
                        array_push($endNoRaio[$key], array('nome_av'=> $val_id['nome_av'], 'categoria' =>$val_id['categoria'], 'url' => $val_id['url'], 'img' => $val_id['img']));
                        $deletar = false;
                        break;
                    }else{
                        $deletar = true;
                    }
                }
                if($deletar){
                    unset($endNoRaio[$key]);
                }
            }

            return($endNoRaio);
            
            
        }
		
	}

?>