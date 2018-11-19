<?php
    $funcaoModel = new funcaoModel();
    $sql = $funcaoModel->getMsg($_SESSION['id']);
    $data = $sql->fetchAll();
    $pessoas = array(
        'id' => array(),
        'hora'=> array()
    ); 
    foreach ($data as $dados){
        
        if(in_array($dados['remetente_id'], $pessoas['id'])){
          
        }else{ 
            array_push($pessoas['id'], $dados['remetente_id']);
            array_push($pessoas['hora'], $dados['hora']);
            $usuariosModel = new usuariosModel();
            $sqlpessoa = $usuariosModel->getDados($dados['remetente_id']);
            $dadosPessoa = $sqlpessoa->fetch();
?>
<div class="chat_list active_chat pessoa">
    <div class="chat_people">
        <div class="chat_ib">
            <h5><?php echo $dadosPessoa['nome']; ?> <span class="chat_date"><?php echo date("d M - H:i", strtotime($dados['hora'])); ?></span></h5>
            <input type="hidden" value="<?php echo $dados['remetente_id']; ?>"/>
        </div>
    </div>
</div>

<?php  
} } 

?>
