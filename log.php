<?php

function wr_json_to_logs($chat_id)
    {
    $lfile = fopen('logs/input_logs', 'wr');
    fputs($lfile, $chat_id);
    fclose($lfile);
    //sendMessage($chat_id, "Записано");
    }

?>