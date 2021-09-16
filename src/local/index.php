<?php
header( 'Content-type: text/html; charset=utf-8' );
echo 'Begin ...<br />';
$output = shell_exec("cd /d F:\landing-bornafit-front && npm run build");
var_dump($output);
flush();
ob_flush();
sleep(2);
echo 'upload ...';
flush();
ob_flush();
sleep(2);
echo 'success ...';

echo 'End ...<br />';



?>
