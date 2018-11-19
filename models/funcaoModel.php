<?php

class funcaoModel extends Model {

    public function getAllactive() {
        $sql = "SELECT * from tbl_funcoes WHERE status_func = 'ativo' ";
        $sql = $this->pdo->prepare($sql);
        $sql->execute();
        return $sql;
    }

    public function novaMsg($msg, $remetente, $destinatario) {
        $sql = "INSERT INTO tbl_chat(msg, remetente_id, destinatario_id,hora) VALUES(?, ?, ?, NOW())";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(1, $msg);
        $sql->bindValue(2, $remetente);
        $sql->bindValue(3, $destinatario);
        $sql->execute();
    }
    
    public function gerarNotificacao($user_id, $origem_id, $notificacao) {
        $sql = "INSERT INTO notificacao(user_id, origem_id, notificacao, lida) VALUES(?, ?, ?, 0)";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(1, $user_id);
        $sql->bindValue(2, $origem_id);
        $sql->bindValue(3, $notificacao);
        $sql->execute();
    }
    public function getMsg($id) {
        $sql = "SELECT * from tbl_chat WHERE destinatario_id = ? ORDER BY hora DESC";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(1, $id);
        $sql->execute();
        return $sql;
    }
    public function getChat($reme, $dest) {
        $sql = "SELECT * from tbl_chat WHERE destinatario_id = ? AND remetente_id = ? OR destinatario_id = ? AND remetente_id = ? ORDER BY hora";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(1, $dest);
        $sql->bindValue(2, $reme);
        $sql->bindValue(3, $reme);
        $sql->bindValue(4, $dest);
        $sql->execute();
        return $sql;
    }
    
    public function naoLidas($id_dest){
        $sql = "SELECT * FROM tbl_chat WHERE lida = 0 AND destinatario_id = ? ";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(1, $id_dest);
        $sql->execute();
        return $sql;
        
    }

}
?>						
