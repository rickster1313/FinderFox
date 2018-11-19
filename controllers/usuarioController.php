<?php 
    class usuarioController extends Controller{
        public function index(){
            $this->seguranca();
            $nomePag = "usuario";
            $usuariosModel = new usuariosModel();
            $userDados = $usuariosModel->getDados($_SESSION['id']);
            $userDados = $userDados->fetch();
            $dados = array(
                'nome' => $userDados["nome"]
            );
            $this->loadView($nomePag, $dados);

        }

        private function seguranca(){
            $seguro = true;
            //teste se login está OK
            if(!isset($_SESSION["id"]) || empty($_SESSION["id"])){
                $seguro = false;
            }
            //teste se o nvl_acesso corresponde a página ADM
            if(!isset($_SESSION["nvl_acesso"]) || empty($_SESSION["nvl_acesso"]) || $_SESSION["nvl_acesso"] != "usuario"){
                $seguro = false;
            }
            if(!$seguro){
                $_SESSION["msg"] = "<div class='alert alert-warning'>
  <strong>Opa! </strong> Para ter acesso à essa página você precisa fazer login
</div>  ";
                header("Location:".BASE_URL."login");
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
    }
?>