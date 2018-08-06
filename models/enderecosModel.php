<?php 

    class enderecosModel extends Model{
        public function cadastraEndereco($id, $cep, $rua, $estado, $cidade, $num){
            $sql = "INSERT INTO tbl_endereco(user_id, cep, rua, estado, cidade, numero, nome, active) VALUES (?, ?, ?, ?, ?, ?, 'principal', 'nao' ) ";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(1, $id);
            $sql->bindValue(2, $cep);
            $sql->bindValue(3, $rua);
            $sql->bindValue(4, $estado);
            $sql->bindValue(5, $cidade);
            $sql->bindValue(6, $num);
            $sql->execute();
        }

        public function getEnderecos($id){
            $sql = "SELECT * FROM tbl_endereco WHERE user_id = '$id'";
            $sql = $this->pdo->query($sql);
            return $sql;
        }

    }
?>