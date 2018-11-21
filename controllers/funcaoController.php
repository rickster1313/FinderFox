<?php 
    class funcaoController extends Controller{
        
        public function uploadImg($imagem, $nome, $local){
            if($imagem['error'] === 0){
                $tipo = explode("/", $imagem['type']);
                if ($tipo[0] == "image") {
                    $novo_name = $nome.'.'.$tipo[1];
                    move_uploaded_file($imagem['tmp_name'], $local.$novo_name);
                    return $novo_name;
                }else{
                    return "erro";
                }
            }else{
                return "erro";
            }
        }

        public function uploadImgs($imagem, $nome, $local){
            for($x=0;$x < count($imagem['tmp_name']); $x++){
                if($imagem['error'][$x] === 0){
                    $tipo = explode("/", $imagem['type'][$x]);
                    if ($tipo[0] == "image"){
                        $novo_name = $nome.'-'.$x.'.'.$tipo[1];
                        move_uploaded_file($imagem['tmp_name'][$x], $local.$novo_name);
                        $array_nome[] = $novo_name;
                    }
                }
            }
            return implode("$!$", $array_nome);
        }
        
        
    }

    

?>