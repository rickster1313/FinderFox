<?php
$funcaoModel = new funcaoModel();
$sql = $funcaoModel->getChat($remetente, $_SESSION['id']);
$dados = $sql->fetchAll();
foreach ($dados as $value) {

    if ($remetente == $value['remetente_id']) {
        echo '<br>';
        ?>
        <div class="incoming_msg">
            <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
            <div class="received_msg">
                <div class="received_withd_msg">
                    <p><?php echo $value['msg']; ?></p>
                    <span class="time_date"><?php echo date("d M - H:i", strtotime($value['hora'])); ?></span></div>
            </div>
        </div>
    <?php } else { ?>
        <div class="outgoing_msg" style="margin-right: 20px;">
            <div class="sent_msg">
                <p><?php echo $value['msg']; ?></p>
                <span class="time_date"><?php echo date("d M - H:i", strtotime($value['hora'])); ?></span> </div>
        </div>
    <?php }
} ?>