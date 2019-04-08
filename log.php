<?php

function wr_input_mess_to_logs($chat_id, $username, $user_id, $message)
    {
    $lfile = fopen('logs/logs', 'a');
    //fseek($lfile, 0, SEEK_END);
    //fputs($lfile, date("d/m/Y H:i:s  ")."Chat:".$chat_id." Nick:".$username." User".$user_id." Message:".$message."\n");
    fwrite($lfile, "I ".date("d/m/Y H:i:s  ")."Chat:".$chat_id." Nick:".$username." User:".$user_id." Message:\n".$message."\n\n");
    fclose($lfile);
    //sendMessage($chat_id, "Записано");
    }
function wr_output_mess_to_logs($chat_id, $message)
    {
    $lfile = fopen('logs/logs', 'a');
    //fseek($lfile, 0, SEEK_END);
    //fputs($lfile, date("d/m/Y H:i:s  ")."Chat:".$chat_id." Nick:".$username." User".$user_id." Message:".$message."\n");
    fwrite($lfile, "O ".date("d/m/Y H:i:s  ")."Chat:".$chat_id." Nick:".NAME_BOT." Message:\n".$message."\n\n");
    fclose($lfile);
    //sendMessage($chat_id, "Записано");
    }
    
?>