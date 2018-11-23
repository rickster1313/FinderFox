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
        $sql = $avsModel->getAVs();
        $dados = $sql->fetchAll();
        echo json_encode($dados);
        
        
    }
    public function getEndOn(){
        $enderecosModel = new enderecosModel();
        $sql = $enderecosModel->endAtivos();
        $dados = $sql->fetchAll();
        echo json_encode($dados);
    }
   
}

?>