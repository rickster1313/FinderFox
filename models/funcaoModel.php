<?php

class funcaoModel extends Model {

    public function getAll() {
        $sql = "SELECT * from tbl_funcoes";
        $sql = $this->pdo->prepare($sql);
        $sql->execute();
        return $sql;
    }

}
?>						
