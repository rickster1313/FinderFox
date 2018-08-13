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
    }
?>