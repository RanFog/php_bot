<?php

function wr_json_to_logs($chat_id, $username, $user_id, $message)
    {
    $lfile = fopen('logs/input_logs', 'wr');
    fputs($lfile, date("d/m/Y H:i:s  ")."Chat:".$chat_id." Nick:".$username." User".$user_id." Message:".$message."\n");
    fseek($fd, 0, SEEK_END);
    fclose($lfile);
    //sendMessage($chat_id, "Записано");
    }

?>