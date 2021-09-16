<?php
class Archive implements BehaviorInterface
{

    static function install()
    {
        self::zipExtract(config('fullPathZipFile'),config('projectPath'));
    }

    private static function zipExtract($fullPathZipFile,$projectPath){
        $zip = new ZipArchive;
        $res = $zip->open($fullPathZipFile);
        if ($res === TRUE) {
            $zip->extractTo($projectPath);
            $zip->close();
        } else {
            echo 'error in extract';
        }
    }

    static function terminalStartText(): string
    {
        return 'extract...';
    }

    static function terminalEndText($resultInstall): string
    {
        return 'extract success';
    }
}
