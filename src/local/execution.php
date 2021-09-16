<?php
header( 'Content-type: text/html; charset=utf-8' );
require_once 'lib/loader.php';

//respectively
$behaviors = [
    Command::class,
    Archive::class,
    Upload::class
];
echo "<pre>";
foreach ($behaviors as $item) {
    echo "<p class='panding'>" . $item::terminalStartText() . "</p>";
    flush();
    ob_flush();
    echo "<p class='success'>" . $item::terminalEndText($item::install()) . "</p>";
    echo "\n";
    flush();
    ob_flush();
}
