<?php 

    class avsModel extends Model{
        public function procuraAV($id_user){
            $sql = "SELECT * FROM tbl_avs WHERE user_id = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(1, $id_user);
            $sql->execute();
            return $sql;
        }

        public function procuraNomeAv($nomeUser){
            $sql = "SELECT * FROM tbl_avs WHERE nome_av = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(1, $nomeUser);
            $sql->execute();
            return $sql;
        }

         public function procuraUrlAv($url){
            $sql = "SELECT * FROM tbl_avs WHERE url = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(1, $url);
            $sql->execute();
            return $sql;
        }

         public function getDadosAV($id){
            $sql = "SELECT * FROM tbl_avs WHERE id_av = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(1, $id);
            $sql->execute();
            return $sql;
        }

        public function novoAV($user, $url, $nome, $slogan, $logo){
            $sql = "INSERT INTO tbl_avs(user_id, url, nome_av, slogan_av, logo_av) VALUES (?, ?, ?, ?, ?)";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(1, $user);
            $sql->bindValue(2, $url);
            $sql->bindValue(3, $nome);
            $sql->bindValue(4, $slogan);
            $sql->bindValue(5, $logo);
            $sql->execute();
        }

    }



?>
