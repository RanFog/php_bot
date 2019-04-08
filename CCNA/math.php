<?php
function mask($mess)
    {
    $m = explode(" ", $mess);
    switch ($m[1])
		{
        case '/32': return 'mask: 255.255.255.255 address: 1';
        case '/31': return 'mask: 255.255.255.254 address: 2';
        case '/30': return 'mask: 255.255.255.252 address: 4';
        case '/29': return 'mask: 255.255.255.248 address: 8';
        case '/28': return 'mask: 255.255.255.240 address: 16';
        case '/27': return 'mask: 255.255.255.224 address: 32';
        case '/26': return 'mask: 255.255.255.192 address: 64';
        case '/25': return 'mask: 255.255.255.128 address: 128';
        case '/24': return 'mask: 255.255.255.0 address: 256';
        case '/23': return 'mask: 255.255.254.0 address: 512';
        case '/22': return 'mask: 255.255.252.0 address: 1024';
        case '/21': return 'mask: 255.255.248.0 address: 2048';
        case '/20': return 'mask: 255.255.240.0 address: 4096';
        case '/19': return 'mask: 255.255.224.0 address: 8192';
        case '/18': return 'mask: 255.255.192.0 address: 16384';
        case '/17': return 'mask: 255.255.128.0 address: 32768';
        case '/16': return 'mask: 255.255.0.0 address: 65536';
        case '/15': return 'mask: 255.254.0.0';
        case '/14': return 'mask: 255.252.0.0';
        case '/13': return 'mask: 255.248.0.0';
        case '/12': return 'mask: 255.240.0.0';
        case '/11': return 'mask: 255.224.0.0';
        case '/10': return 'mask: 255.192.0.0';
        case '/9': return 'mask: 255.128.0.0';
        case '/8': return 'mask: 255.0.0.0';
        case '/7': return 'mask: 254.0.0.0';
        case '/6': return 'mask: 252.0.0.0';
        case '/5': return 'mask: 248.0.0.0';
        case '/4': return 'mask: 240.0.0.0';
        case '/3': return 'mask: 224.0.0.0';
        case '/2': return 'mask: 192.0.0.0';
        case '/1': return 'mask: 128.0.0.0';
        case '/0': return 'mask: 0.0.0.0';
        case '255.255.255.255': return 'prefix: /32 address: 1';
        case '255.255.255.254': return 'prefix: /31 address: 2';
        case '255.255.255.252': return 'prefix: /30 address: 4';
        case '255.255.255.248': return 'prefix: /29 address: 8';
        case '255.255.255.240': return 'prefix: /28 address: 16';
        case '255.255.255.224': return 'prefix: /27 address: 32';
        case '255.255.255.192': return 'prefix: /26 address: 64';
        case '255.255.255.128': return 'prefix: /25 address: 128';
        case '255.255.255.0': return 'prefix: /24 address: 256';
        case '255.255.254.0': return 'prefix: /23 address: 512';
        case '255.255.252.0': return 'prefix: /22 address: 1024';
        case '255.255.248.0': return 'prefix: /21 address: 2048';
        case '255.255.240.0': return 'prefix: /20 address: 4096';
        case '255.255.224.0': return 'prefix: /19 address: 8192';
        case '255.255.192.0': return 'prefix: /18 address: 16384';
        case '255.255.128.0': return 'prefix: /17 address: 65536';
        case '255.255.0.0': return 'prefix: /16';
        case '255.254.0.0': return 'prefix: /15';
        case '255.252.0.0': return 'prefix: /14';
        case '255.248.0.0': return 'prefix: /13';
        case '255.240.0.0': return 'prefix: /12';
        case '255.224.0.0': return 'prefix: /11';
        case '255.192.0.0': return 'prefix: /10';
        case '255.128.0.0': return 'prefix: /9';
        case '255.0.0.0': return 'prefix: /8';
        case '254.0.0.0': return 'prefix: /7';
        case '252.0.0.0': return 'prefix: /6';
        case '248.0.0.0': return 'prefix: /5';
        case '240.0.0.0': return 'prefix: /4';
        case '224.0.0.0': return 'prefix: /3';
        case '192.0.0.0': return 'prefix: /2';
        case '128.0.0.0': return 'prefix: /1';
        case '0.0.0.0': return 'prefix: /0';
        default: return "Укажите маску или префикс\n Например: '/mask 255.255.255.0' или '/mask /24'";
        }
    }
?>