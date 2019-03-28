<?php

$ip = $_SERVER["REMOTE_ADDR"];
echo "$ip";
$t = explode($ip,".");
$v = ksort($t);
echo "$v";
?>