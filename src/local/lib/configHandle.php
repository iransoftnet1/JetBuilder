<?php
$config = require_once 'config.php';

//validate project key
if (!isset($_GET['project']))
    die('project key not found');

if (!isset($config['project'][$_GET['project']]))
    die('config project not found');

//special key
createSpecialKeys();

//get key config
function config($key)
{
    global $config;
    $currentKeyProject = $_GET['project'];
    if (isset($config['project'][$currentKeyProject][$key]))
        return $config['project'][$currentKeyProject][$key];


    if (isset($config['default'][$key]))
        return $config['default'][$key];

    return $config[$key];

}

//run time config key
function createSpecialKeys(){
    global $config;
    $currentKeyProject = $_GET['project'];
    $config['currentKeyProject'] = $currentKeyProject;
    $config['fullDirProductionPath'] = config('projectPath') .config('productionPath');
    $config['fullProductionZipFile'] = config('fullDirProductionPath') . DIRECTORY_SEPARATOR .config('zipFileName').'.zip';

}
