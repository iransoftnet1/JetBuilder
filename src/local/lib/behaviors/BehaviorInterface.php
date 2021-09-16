<?php


interface BehaviorInterface
{
    static function install();

    static function terminalStartText(): string;

    static function terminalEndText($resultInstall): string;
}
