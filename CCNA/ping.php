<?php
function ($mess)
    {    
    $ip = explode(" ", $mess);
    return shell_exec ("ping -c 4 $ip[1]");
    }
?>