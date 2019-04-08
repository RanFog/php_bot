<?php
function ping($mess) // Команда пинг запускает с сервера пинг до какого-либо ресурса. Например "/ping ya.ru"
    {    
    $ip = explode(" ", $mess); //Сохраняет в $ip[1] все, что идет после пробела, например 
    $tmp = shell_exec ("ping -c 4 ".$ip[1]); // Набрать в коммандной строке "ping -c 4 'адрес ресурса'" 
    wr_output_mess_to_logs($chat_id, $tmp);
    return $tmp;
    }
?>