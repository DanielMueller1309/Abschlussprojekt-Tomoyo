<?php
#https://www.php.net/manual/de/function.shell-exec.php
$output = shell_exec('cat /etc/secrets/geheim.txt');
echo $output
?>
