<?php

class buscaAVController extends Controller {

    public function index($cep) {
        $_SESSION['cep'] = $cep[0] ;
        $nomePag = "buscaAV";
        $dados = array();
        $this->loadView($nomePag, $dados);
    }
    public function getCep(){
        if(isset($_SESSION['cep'])){
            echo json_encode($_SESSION['cep']);
        }
    }
    public function getAVs(){
        $avsModel = new avsModel();
        $enderecosModel = new enderecosModel();
        
    }
   
}

?>