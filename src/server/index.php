<?php
header('Content-type: text/html; charset=utf-8');
require_once 'lib/loader.php';
//respectively
$behaviors = [
    Receiver::class,
    Clean::class,
    Archive::class
];
foreach ($behaviors as $item) {
    echo "<p class='panding'>" . $item::terminalStartText() . "</p>";
    flush();
    ob_flush();
    echo "<p class='success'>" . $item::terminalEndText($item::install()) . "</p>";
    echo "\n";

    flush();
    ob_flush();

}
