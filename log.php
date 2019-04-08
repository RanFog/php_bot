<?php

function wr_json_to_logs()
    {
    $file = fopen('logs/input_logs', 'wr');
    fwrite($file, $output);
    fclose($file);
    sendMessage($chat_id, "Записано");
    }

?>