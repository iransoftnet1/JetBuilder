<?php
$config = require_once 'config.php';

//validate project key
if (!isset($_POST[config('tokenKey')]))
    die('token not found');

if ($_POST[config('tokenKey')] != config('token'))
    die('token not valid');

createSpecialKeys();

//get key config
function config($key)
{
    global $config;
    return isset($config[$key])
        ? $config[$key]
        : null;
}

//run time config key
function createSpecialKeys(){
    global $config;
    $config['fullPathZipFile'] = config('saveReceivedPathFile') . DIRECTORY_SEPARATOR . config('zipFileName') . '.zip';
}


