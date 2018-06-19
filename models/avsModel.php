<?php 

    class avsModel extends Model{
        public function procuraAV($id_user){
            $sql = "SELECT * FROM tbl_avs WHERE user_id = ?";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(1, $id_user);
            $sql->execute();
            return $sql;
        }

    }

?>
