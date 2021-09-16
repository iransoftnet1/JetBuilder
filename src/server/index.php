<?php
require_once 'save.php';
require_once 'remove.php';
require_once 'zip.php';
save::saveFile();
remove::start();
zip::extract(__DIR__ . '/file.zip');


die('success');