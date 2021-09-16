<?php
require_once 'zip.php';
require_once 'Upload.php';
header( 'Content-type: text/html; charset=utf-8' );

echo '----BEGIN...<br />';

//build
echo '<p>build...</p>';
/*$output = shell_exec("cd /d F:\landing-bornafit-front && npm run build");
var_dump($output);
*/
echo '<p>** build success **</p>';
flush();
ob_flush();



//convert file to zip
echo '<p>zip archive...</p>';
$zip = new convertZip();
$zip->convert('F:\landing-bornafit-front\dist');

echo '<p>** zip archive **</p>';
flush();
ob_flush();


//upload file
echo '<p>upload file...</p>';
$upload = new upload('test123','http://localhost/server/index.php');
$upload->send(__DIR__.'/file.zip');

echo '<p>** zip archive **</p>';
flush();
ob_flush();





echo '<p>----END</p>';



?>
