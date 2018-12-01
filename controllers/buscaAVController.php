<?php

class buscaAVController extends Controller {

    public function index($cep) {
        $nomePag = "buscaAV";
        $dados = array("cepBusca" => $cep[0]);
        $this->loadView($nomePag, $dados);
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
   public function createError(){
        $msg = $_POST['msg'];
        $_SESSION['msg'] = "<div class='alert alert-warning alert-dismissible w-75' style='left: 50%; transform: translate(-50%);'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    ".$msg."</div>";
    }
}

?>