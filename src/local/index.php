<?php
require_once 'zip.php';
header( 'Content-type: text/html; charset=utf-8' );

echo '----BEGIN...<br />';

//build
echo '<p>build...</p>';
/*$output = shell_exec("cd /d F:\landing-bornafit-front && npm run build");
var_dump($output);
flush();
ob_flush();*/
echo '<p>** build success **</p>';


//convert file to zip
echo '<p>zip archive...</p>';
$zip = new convertZip();
$zip->convert('F:\landing-bornafit-front\dist');


flush();
ob_flush();
echo '<p>** zip archive **</p>';

echo '<p>----END</p>';



?>
