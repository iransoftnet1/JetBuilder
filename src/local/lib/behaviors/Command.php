<?php

class Command implements BehaviorInterface
{

    private static $command = '';

    public static function install()
    {
        self::commandSetDir();
        self::$command .= ' && ';
        self::commandBuild();

        return shell_exec(self::$command);
    }

    private static function commandSetDir()
    {
        self::$command .= 'cd /d ' . config('projectPath');
    }

    private static function commandBuild()
    {
        self::$command .= config('command');
    }

    static function terminalStartText(): string
    {
        return 'build...';
    }

    static function terminalEndText($resultInstall): string
    {
        return  $resultInstall . "\n" .'build success';
    }
}
