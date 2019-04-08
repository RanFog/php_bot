<?php
function mask($mess)
    {
    $m = explode(" ", $mess);
    switch ($m[1])
		{
        case '/32': return ('mask: 255.255.255.255');
        case '/24': return ('mask: 255.255.255.0');
        }
    }
?>