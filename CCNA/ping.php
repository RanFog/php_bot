<?php
function ping($mess)
    {    
    $ip = explode(" ", $mess);
    return $ip[1];//shell_exec ("ping -c 4".$ip[1]);
    }
?>