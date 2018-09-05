<?php

class funcaoModel extends Model {

    public function getAllactive() {
        $sql = "SELECT * from tbl_funcoes WHERE status_func = 'ativo' ";
        $sql = $this->pdo->prepare($sql);
        $sql->execute();
        return $sql;
    }

}
?>						
