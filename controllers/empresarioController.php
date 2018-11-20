<?php

class empresarioController extends Controller {

    public function index() {
        $this->seguranca();
        $nomePag = "empresario";
        $usuariosModel = new usuariosModel();
        $userDados = $usuariosModel->getDados($_SESSION['id']);
        $userDados = $userDados->fetch();
        $dados = array(
            'nome' => $userDados["nome"],
            'av_status' => $this->verificaAV(),
            'av_dados' => $this->getAv()
        );

        $this->loadView($nomePag, $dados);
    }

    private function getAv() {
        $avsModel = new avsModel();
        $avs_dados = $avsModel->procuraAV($_SESSION['id']);
        if ($avs_dados->rowCount() > 0) {
            return $avs_dados->fetchAll();
        } else {
            return null;
        }
    }

    public function verificaAV() {
        $avsModel = new avsModel();
        $avs_dados = $avsModel->procuraAV($_SESSION['id']);
        if ($avs_dados->rowCount() > 0) {
            return 'html/av_personalize.php';
        } else {
            return 'html/av_create.php';
        }
    }

    public function verificaNomeAV() {
        $array = array(
            'status' => ''
        );


        $nomeAv = addslashes($_POST['nome_empresa_txt']);
        $avsModel = new avsModel();
        $dados = $avsModel->procuraNomeAv($nomeAv);
        if ($dados->rowCount() > 0) {
            $array['status'] = 'yes';
        } else {
            $array['status'] = 'no';
        }
        echo json_encode($array);
    }

    public function verificaUrlAV() {
        $array = array(
            'status_url' => ''
        );


        $url = addslashes($_POST['url_txt']);
        $avsModel = new avsModel();
        $dados = $avsModel->procuraUrlAv($url);
        if ($dados->rowCount() > 0) {
            $array['status_url'] = 'yes';
        } else {
            $array['status_url'] = 'no';
        }
        echo json_encode($array);
    }

    public function novoAV() {
        $nome_av = addslashes($_POST['nome_empresa_txt']);
        $url = addslashes($_POST['url_txt']);
        $slogan = addslashes($_POST['slogan_txt']);
        $logo = $_FILES['logo_txt'];
        $extensao_logo = explode("/", $logo['type']);
        $nome_logo = "logo-" . str_replace(" ", "-", $nome_av) . "." . $extensao_logo[1];
        move_uploaded_file($logo['tmp_name'], "assets/images/AV/" . $nome_logo);
        $avsModel = new avsModel();
        $avsModel->novoAV($_SESSION['id'], $url, $nome_av, $slogan, $nome_logo);
    }

    public function alterarEnd() {
        $id = addslashes($_POST['idpass']);
        $nome = addslashes($_POST['nome_txt']);
        $rua = addslashes($_POST['rua_txt']);
        $num = addslashes($_POST['num_txt']);
        $cid = addslashes($_POST['cid_txt']);
        $est = addslashes($_POST['est_txt']);
        $cep = addslashes($_POST['cep_txt']);
        $raio = addslashes($_POST['raio_txt']);
        if (!is_numeric($raio)) {
            $raio = strtolower($raio);
            if ($raio != "global") {
                $raio = "global";
            }
        }
        $funcaoController = new funcaoController();
        $coordenadas = $funcaoController->coordenadasCep($cep);
        $lat = $coordenadas['lat'];
        $lon = $coordenadas['lon'];
        $enderecosModel = new enderecosModel();
        $enderecosModel->alterarEnd($id, $nome, $rua, $num, $cid, $est, $cep, $raio, $lat, $lon);
    }

    public function deleteEnd() {
        $id = addslashes($_POST['iddel']);
        $enderecosModel = new enderecosModel();
        $enderecosModel->deletarEnd($id);
    }

    public function activeEnd() {
        $id = addslashes($_POST['idactive']);
        $opcao = addslashes($_POST['opcao']);
        $raio = addslashes($_POST['raio']);
        if (!is_numeric($raio)) {
            $raio = strtolower($raio);
            if ($raio != "global") {
                $raio = "global";
            }
        }
        $enderecosModel = new enderecosModel();
        if ($opcao == "ativar") {
            $sql = $enderecosModel->getEndId($id);
            $dados = $sql->fetch();
            $funcaoController = new funcaoController();
            $coordenadas = $funcaoController->coordenadasCep($dados['cep']);

            if ($coordenadas['status'] == "ok") {
                $lat = $coordenadas['lat'];
                $lon = $coordenadas['lon'];
                $enderecosModel->onEnd("sim", $id, $raio, $lat, $lon);
            } else {
                echo "erro";
            }
        } else {
            $enderecosModel->offEnd("nao", $id, $raio);
        }
    }

    private function seguranca() {
        $seguro = true;
        //teste se login está OK
        if (!isset($_SESSION["id"]) || empty($_SESSION["id"])) {
            $seguro = false;
        }
        //teste se o nvl_acesso corresponde a página empresario
        if (!isset($_SESSION["nvl_acesso"]) || empty($_SESSION["nvl_acesso"]) || $_SESSION["nvl_acesso"] != "empresario") {
            $seguro = false;
        }
        if (!$seguro) {
            $_SESSION["msg"] = "
				<div class='alert alert-warning'>
  				<strong>Opa! </strong> Para ter acesso à essa página você precisa fazer login</div>";
            header("Location:" . BASE_URL . "login");
        }
    }

    public function attAV() {
        $avsModel = new avsModel();
        $funcao = new funcaoController();
        $sql = $avsModel->procuraAV($_SESSION['id']);
        $dadosBD = $sql->fetch();
        if (isset($_POST['check_img1'])) {
            $img_home_active = "yes";
            if (isset($_FILES['img_home_txt']['tmp_name']) && !empty($_FILES['img_home_txt']['tmp_name'])) {
                $retorno = $funcao->uploadImg($_FILES['img_home_txt'], "photoHome-" . $_SESSION['id'] . "-" . date("d-m-Y-H-i-s"), "assets/images/AV/");
                if ($retorno == "erro") {
                    $img_home = $dadosBD['img_home'];
                } else {
                    $img_home = $retorno;
                    unlink("assets/images/AV/" . $dadosBD['img_home']);
                }
            } else {
                $img_home = $dadosBD['img_home'];
            }
        } else {
            $img_home_active = "no";
            $img_home = $dadosBD['img_home'];
        }
        if (isset($_POST['check_sobre1'])) {
            $part1_active = "yes";
            $part1_title = $_POST['part1_title_txt'];
            $part1_nome1 = $_POST['part1_nome1_txt'];
            $part1_text1 = $_POST['part1_text1_txt'];
            $part1_nome2 = $_POST['part1_nome2_txt'];
            $part1_text2 = $_POST['part1_text2_txt'];
            $part1_nome3 = $_POST['part1_nome3_txt'];
            $part1_text3 = $_POST['part1_text3_txt'];
        } else {
            $part1_active = "no";
            $part1_title = $dadosBD['part1_title'];
            $part1_nome1 = $dadosBD['part1_nome1'];
            $part1_text1 = $dadosBD['part1_text1'];
            $part1_nome2 = $dadosBD['part1_nome2'];
            $part1_text2 = $dadosBD['part1_text2'];
            $part1_nome3 = $dadosBD['part1_nome3'];
            $part1_text3 = $dadosBD['part1_text3'];
        }
        if (isset($_POST['check_sobre2'])) {
            $part2_active = "yes";
            $part2_nome1 = $_POST['part2_nome1_txt'];
            $part2_text1 = $_POST['part2_text1_txt'];
            $part2_nome2 = $_POST['part2_nome2_txt'];
            $part2_text2 = $_POST['part2_text2_txt'];
            $part2_nome3 = $_POST['part2_nome3_txt'];
            $part2_text3 = $_POST['part2_text3_txt'];
            if (isset($_FILES['part2_img_txt']['tmp_name']) && !empty($_FILES['part2_img_txt']['tmp_name'])) {
                $retorno = $funcao->uploadImg($_FILES['part2_img_txt'], "photoSobre-" . $_SESSION['id'] . "-" . date("d-m-Y-H-i-s"), "assets/images/AV/");
                if ($retorno == "erro") {
                    $part2_img = $dadosBD['part2_img'];
                } else {
                    $part2_img = $retorno;
                    unlink("assets/images/AV/" . $dadosBD['part2_img']);
                }
            } else {
                $part2_img = $dadosBD['part2_img'];
            }
        } else {
            $part2_active = "no";
            $part2_nome1 = $dadosBD['part2_nome1'];
            $part2_text1 = $dadosBD['part2_text1'];
            $part2_nome2 = $dadosBD['part2_nome2'];
            $part2_text2 = $dadosBD['part2_text2'];
            $part2_nome3 = $dadosBD['part2_nome3'];
            $part2_text3 = $dadosBD['part2_text3'];
            $part2_img = $dadosBD['part2_img'];
        }
        if (isset($_POST['check_galery'])) {
            $galery_active = "yes";
            $galery_title = $_POST['galery_title_txt'];

            if (count($_FILES['galery_imagens']['tmp_name']) > 0) {
                if (!empty($_FILES['galery_imagens']['tmp_name'][0])) {
                    $retorno = $funcao->uploadImgs($_FILES['galery_imagens'], "photoGalery-" . $_SESSION['id'] . "-" . date("d-m-Y-H-i-s"), "assets/images/AV/");

                    if (isset($_POST['check_manter'])) {
                        $fotos = $dadosBD['fotos'] . "$!$" . $retorno;
                    } else {
                        $fotos = $retorno;

                        $array_fotos = explode("$!$", $dadosBD['fotos']);
                        foreach ($array_fotos as $value) {
                            unlink("assets/images/AV/" . $value);
                        }
                    }
                } else {
                    if (isset($_POST['check_manter'])) {
                        $fotos = $dadosBD['fotos'];
                    } else {
                        $fotos = " ";

                        $array_fotos = explode("$!$", $dadosBD['fotos']);
                        foreach ($array_fotos as $value) {
                            unlink("assets/images/AV/" . $value);
                        }
                    }
                }
            } else {
                if (isset($_POST['check_manter'])) {
                    $fotos = $dadosBD['fotos'];
                } else {
                    $fotos = " ";
                    /*
                      $array_fotos = explode("$!$", $dadosBD['fotos']);
                      foreach ($array_fotos as $value) {
                      unlink("assets/images/AV/".$value);
                      } */
                }
            }
        } else {
            $galery_active = "no";
            $galery_title = $dadosBD['galery_title'];
            $fotos = $dadosBD['fotos'];
        }

        for ($x = 0; $x <= 3; $x++) {
            if ($_POST['select' . $x] != "none" && !empty($_POST['select_url' . $x])) {
                $array_tipos[] = $_POST['select' . $x];
                $array_urls[] = $_POST['select_url' . $x];
            }
        }
        $tipos = implode(",", $array_tipos);
        $tipos_val = implode("$!$", $array_urls);
        $avsModel->personalizeAV($img_home_active, $img_home, $part1_active, $part1_title, $part1_nome1, $part1_nome2, $part1_nome3, $part1_text1, $part1_text2, $part1_text3, $part2_active, $part2_nome1, $part2_nome2, $part2_nome3, $part2_text1, $part2_text2, $part2_text3, $part2_img, $galery_active, $galery_title, $fotos, $tipos, $tipos_val, $_SESSION['id']);
    }

    public function ativarFunc() {
        if (isset($_POST['funcao'])) {
            $funcao = $_POST['funcao'];
            $user = $_SESSION['id'];
            $avsModel = new avsModel();
            $sql = $avsModel->procuraAV($user);
            $dados = $sql->fetch();
            if($dados['func']==""){
                $funcao_new = $funcao;
            }else{
                $funcoes_old = explode(",", $dados['func']);
                array_push($funcoes_old, $funcao);
                $funcao_new = implode(",", $funcoes_old);
            }
            
            $avsModel->upd_func($funcao_new, $user);
            
        }
    }

    public function desativarFunc() {
        if (isset($_POST['funcao'])) {
            $funcao = $_POST['funcao'];
            $user = $_SESSION['id'];
            $avsModel = new avsModel();
            $sql = $avsModel->procuraAV($user);
            $dados = $sql->fetch();
            $funcoes_old = explode(",", $dados['func']);
            $key = array_search($funcao, $funcoes_old);
            if ($key !== false) {
                unset($funcoes_old[$key]);
            }
            $funcao_new = implode(",", $funcoes_old);
            $avsModel->upd_func($funcao_new, $user);
            
        }
    }
    
    public function setMsg(){
        $destinatario = $_POST['destinatario'];
        $msg = $_POST['msgChat'];
        $remetente = $_SESSION['id'];
        $funcaoModel = new funcaoModel();
        $funcaoModel->novaMsg($msg, $remetente, $destinatario);
        $funcaoModel->gerarNotificacao($destinatario, $remetente, "Você possui uma nova mensagem!");
    }
    
    public function getInfo(){
        $contatos = $_POST['contacts'];
        $funcoes = new funcaoModel();
        $qtd = array();
        foreach ($contatos as $valor){
            $sql = $funcoes->naoLidas($_SESSION['id'], $valor);
            if($sql->rowCount() > 0){
                array_push($qtd, $sql->rowCount());
                
            }else{
                array_push($qtd, 0);
            }
            
        }
        echo json_encode($qtd);
    }
    public function visualizou(){
        $remetente = $_POST['user'];
        $destinatario = $_SESSION['id'];
        $funcoes = new funcaoModel();
        $funcoes->lida($destinatario, $remetente);
    }

    public function alterarUser(){
        $nome = $_POST['nome'];
        $senhaA = $_POST['senha'];
        $senhaN = password_hash($_POST['confsenha']);

        $user = new usuariosModel();
        $pass = $user->getDados($_SESSION['id']);
        if (password_verify($senhaA, $pass['senha'])) {
            $user->alterarUser($nome, $senhaN, $_SESSION['id']);
        }
        
    }
}

?>