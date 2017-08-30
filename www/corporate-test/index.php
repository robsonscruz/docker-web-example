<?php
if (!isset($_SESSION)) {session_start();}

$meuIp = shell_exec("cat /etc/hosts | grep $(cat /etc/hostname) | awk '{print $1}' | uniq");

if (!isset($_SESSION["time"])) {
	$date             = new \DateTime('now');
	$_SESSION["time"] = "Santos FC -> ".$date->format("d/m/Y H:i:s");
}

echo sprintf("Sou Corporate e meu Ip é {$meuIp} e meu time é %s, arquivo fora do container nops =]", $_SESSION["time"]);

phpinfo();