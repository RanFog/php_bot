<?php

function wr_json_to_logs()
    {
    $lfile = fopen('logs/input_logs', 'wr');
    fputs($lfile, $output);
    fclose($lfile);
    //sendMessage($chat_id, "Записано");
    }

?>