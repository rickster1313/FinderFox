<?php 

    class enderecosModel extends Model{
        public function cadastraEndereco($id, $cep, $rua, $estado, $cidade, $num, $nome){
            $sql = "INSERT INTO tbl_endereco(user_id, cep, rua, estado, cidade, numero, nome, active) VALUES (?, ?, ?, ?, ?, ?, ?, 'nao' ) ";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(1, $id);
            $sql->bindValue(2, $cep);
            $sql->bindValue(3, $rua);
            $sql->bindValue(4, $estado);
            $sql->bindValue(5, $cidade);
            $sql->bindValue(6, $num);
            $sql->bindValue(7, $nome);
            $sql->execute();
        }

        public function getEnderecos($id){
            $sql = "SELECT * FROM tbl_endereco WHERE user_id = '$id'";
            $sql = $this->pdo->query($sql);
            return $sql;
        }

        public function alterarEnd($id, $nome, $rua, $num, $cid, $est, $cep, $raio){
            $sql = "UPDATE tbl_endereco SET cep = ?, rua = ?, estado = ?, cidade = ?, numero = ?, nome = ?, raio = ? WHERE id_end = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(1, $cep);
            $sql->bindValue(2, $rua);
            $sql->bindValue(3, $est);
            $sql->bindValue(4, $cid);
            $sql->bindValue(5, $num);
            $sql->bindValue(6, $nome);
            $sql->bindValue(7, $raio);
            $sql->bindValue(8, $id);
            $sql->execute();
        }

        public function deletarEnd($id){
            $sql = "DELETE FROM tbl_endereco WHERE id_end = '$id'";
            $sql = $this->pdo->query($sql);
            return $sql;
        }
        public function OffEnd($active, $id, $raio){
             $sql = "UPDATE tbl_endereco SET  active = ?, raio = ? WHERE id_end = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(1, $active);
            $sql->bindValue(2, $raio);
            $sql->bindValue(3, $id);
            $sql->execute();
        }

        public function OnEnd($active, $id, $raio){
             $sql = "UPDATE tbl_endereco SET  active = ?, raio = ? WHERE id_end = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(1, $active);
            $sql->bindValue(2, $raio);
            $sql->bindValue(3, $id);
            $sql->execute();
        }

    }
?>